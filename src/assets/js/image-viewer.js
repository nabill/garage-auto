// Configuration
const images = [
    './images/product-image-1.jpg',
    './images/product-image-2.jpg',
    './images/product-image-3.jpg',
    './images/product-image-4.jpg',
    './images/product-image-5.jpg',
    './images/product-image-6.jpg',
    './images/product-image-7.jpg'
 ];
 
 let selectedIndex = 0;
 let startIndex = 0;
 const thumbnailsToShow = 4;

 // Mouse drag variables
 let isDragging = false;
 let startPosition = 0;
 let currentTranslate = 0;
 let prevTranslate = 0;

 // Touch handling variables
 let touchStartX = 0;
 let touchEndX = 0;

 // Elements
 const mainImage = document.getElementById('mainImage');
 const thumbnailsWrapper = document.getElementById('thumbnailsWrapper');
 const thumbnailsTrack = document.getElementById('thumbnailsTrack');
 const prevButton = document.getElementById('prevButton');
 const nextButton = document.getElementById('nextButton');

 // Initialize thumbnails
 function renderThumbnails() {
     thumbnailsTrack.innerHTML = '';
     
     images.forEach((image, i) => {
         const img = document.createElement('img');
         img.src = image;
         img.alt = `Thumbnail ${i + 1}`;
         img.className = `thumbnail ${i === selectedIndex ? 'selected' : ''}`;
         img.draggable = false;
         
         const imgWrapper = document.createElement('div');
         imgWrapper.appendChild(img);
         imgWrapper.addEventListener('click', (e) => {
             if (!isDragging) {
                 selectedIndex = i;
                 mainImage.src = images[i];
                 updateThumbnailSelection();
                 scrollToThumbnail(i);
             }
         });
         
         thumbnailsTrack.appendChild(imgWrapper);
     });
     
     updateNavigationState();
     updateTrackPosition();
 }

 // Mouse drag handlers
 thumbnailsWrapper.addEventListener('mousedown', dragStart);
 thumbnailsWrapper.addEventListener('mousemove', drag);
 thumbnailsWrapper.addEventListener('mouseup', dragEnd);
 thumbnailsWrapper.addEventListener('mouseleave', dragEnd);

 function dragStart(e) {
     isDragging = true;
     startPosition = e.clientX;
     thumbnailsWrapper.classList.add('grabbing');
     thumbnailsTrack.classList.add('no-transition');
 }

 function drag(e) {
     if (!isDragging) return;
     
     const currentPosition = e.clientX;
     const diff = currentPosition - startPosition;
     const newTranslate = prevTranslate + diff;
     
     // Calculate bounds
     const thumbnailWidth = 88; // 80px width + 8px gap
     const maxTranslate = 0;
     const minTranslate = -(images.length - thumbnailsToShow) * thumbnailWidth;
     
     // Apply bounds
     currentTranslate = Math.max(Math.min(newTranslate, maxTranslate), minTranslate);
     thumbnailsTrack.style.transform = `translateX(${currentTranslate}px)`;
 }

 function dragEnd() {
     isDragging = false;
     thumbnailsWrapper.classList.remove('grabbing');
     thumbnailsTrack.classList.remove('no-transition');
     
     // Snap to nearest thumbnail position
     const thumbnailWidth = 88;
     startIndex = Math.round(Math.abs(currentTranslate) / thumbnailWidth);
     prevTranslate = -startIndex * thumbnailWidth;
     updateTrackPosition();
     updateNavigationState();
 }

 // Scroll to specific thumbnail
 function scrollToThumbnail(index) {
     const thumbnailWidth = 88; // 80px width + 8px gap
     if (index < startIndex) {
         startIndex = index;
     } else if (index >= startIndex + thumbnailsToShow) {
         startIndex = index - thumbnailsToShow + 1;
     }
     currentTranslate = -startIndex * thumbnailWidth;
     prevTranslate = currentTranslate;
     updateTrackPosition();
     updateNavigationState();
 }

 // Update track position with smooth animation
 function updateTrackPosition() {
     thumbnailsTrack.style.transform = `translateX(${-startIndex * 88}px)`;
 }

 // Update thumbnail selection
 function updateThumbnailSelection() {
     document.querySelectorAll('.thumbnail').forEach((thumb, idx) => {
         thumb.classList.toggle('selected', idx === selectedIndex);
     });
 }

 // Update navigation buttons state
 function updateNavigationState() {
     prevButton.disabled = startIndex === 0;
     nextButton.disabled = startIndex + thumbnailsToShow >= images.length;
 }

 // Navigation handlers
 prevButton.addEventListener('click', () => {
     if (startIndex > 0) {
         startIndex--;
         currentTranslate = -startIndex * 88;
         prevTranslate = currentTranslate;
         updateTrackPosition();
         updateNavigationState();
     }
 });

 nextButton.addEventListener('click', () => {
     if (startIndex + thumbnailsToShow < images.length) {
         startIndex++;
         currentTranslate = -startIndex * 88;
         prevTranslate = currentTranslate;
         updateTrackPosition();
         updateNavigationState();
     }
 });

 // Touch event handlers for main image
 mainImage.addEventListener('touchstart', (e) => {
     touchStartX = e.touches[0].clientX;
 });

 mainImage.addEventListener('touchend', (e) => {
     touchEndX = e.changedTouches[0].clientX;
     handleSwipe();
 });

 function handleSwipe() {
     const swipeThreshold = 50;
     const swipeDistance = touchEndX - touchStartX;
     
     if (Math.abs(swipeDistance) > swipeThreshold) {
         if (swipeDistance > 0 && selectedIndex > 0) {
             selectedIndex--;
             mainImage.src = images[selectedIndex];
             updateThumbnailSelection();
             scrollToThumbnail(selectedIndex);
         } else if (swipeDistance < 0 && selectedIndex < images.length - 1) {
             selectedIndex++;
             mainImage.src = images[selectedIndex];
             updateThumbnailSelection();
             scrollToThumbnail(selectedIndex);
         }
     }
 }

 // Initial render
 renderThumbnails();