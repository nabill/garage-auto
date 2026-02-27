let cart = [];

        //// Toggle cart drawer
        //document.getElementById('cart-button').addEventListener('click', () => {
        //    document.querySelector('.cart-drawer').classList.toggle('open');
        //    document.querySelector('.cart-overlay').classList.toggle('open');
        //});

        
        // Close cart when clicking overlay
        document.querySelector('.cart-overlay').addEventListener('click', () => {
            document.querySelector('.cart-drawer').classList.remove('open');
            document.querySelector('.cart-overlay').classList.remove('open');
        });

        // Add to cart
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', () => {
                const id = button.dataset.id;
                const name = button.dataset.name;
                const price = parseFloat(button.dataset.price);

                const existingItem = cart.find(item => item.id === id);
                if (existingItem) {
                    existingItem.quantity++;
                } else {
                    cart.push({ id, name, price, quantity: 1 });
                }

                // Open cart drawer when adding items
                document.querySelector('.cart-drawer').classList.add('open');
                document.querySelector('.cart-overlay').classList.add('open');

                updateCart();
            });
        });



        function openCart() {
            document.querySelector('.cart-drawer').classList.toggle('open');
            document.querySelector('.cart-overlay').classList.toggle('open');
        }

        // Update cart display
        function updateCart() {
            const cartItems = document.getElementById('cart-items');
            
            if (cart.length === 0) {
                cartItems.innerHTML = '<div class="empty-cart">Cart is empty</div>';
                document.getElementById('btnCheckout').style.display = 'none';
                document.querySelector('.cart-total').style.display = 'none';
                document.getElementById('cartPaymentMethodsDiv').style.display = 'none';
                //document.getElementById('cart-button').textContent = 'Cart (0)';
                document.getElementById('cart-items-count').style.display = 'none';
                document.getElementById('cart-items-count').innerHTML = '';
                document.getElementById('cartQuantity').value = "0";
                localStorage.setItem("cart-quantity", "0");
                return;
            }

            document.getElementById('btnCheckout').style.display = 'flex';
            document.getElementById('cartPaymentMethodsDiv').style.display = 'block';
            document.querySelector('.cart-total').style.display = 'none';
            document.getElementById('cart-items-count').style.display = 'block';
            document.getElementById('cart-items-count').innerHTML = cart.length;
            document.getElementById('cartQuantity').value = cart.length;
            localStorage.setItem("cart-quantity", cart.length);
            cartItems.innerHTML = '';

            cart.forEach(item => {
                const itemElement = document.createElement('div');
                itemElement.className = 'cart-item';
                itemElement.innerHTML = `
                    <div class="d-flex">
                        <img src="../../images/cart-product.jpg" alt="" style="height: 40px;margin-right: 10px;border-radius: 4px;">
                        <div style="font-family: 'inter ui';font-size: 13px;font-weight: 500;">
                            <div>${item.name}</div>
                            <div>C$${(item.price * item.quantity).toFixed(2)}</div>
                        </div>
                    </div>
                    <div class="quantity-control">
                        <button class="btn" style="padding-left:3px; padding-right: 4px" onclick="log('Quantity - 1', 'Quantity Before : ' + document.getElementById('cart-items-count').innerHTML); updateQuantity('${item.id}', ${item.quantity - 1})">
                            <svg style="width:15px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24"><path d="M5 12h14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </button>
                        <span style="width:18px; text-align: center">${item.quantity}</span>
                        <button class="btn" style="padding-left:3px; padding-right: 4px" onclick="log('Quantity + 1', 'Quantity Before : ' + document.getElementById('cart-items-count').innerHTML); updateQuantity('${item.id}', ${item.quantity + 1})">
                            <svg style="width:15px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14"></path><path d="M5 12h14"></path></g></svg>
                        </button>
                        
                    </div>
                `;

                cartItems.appendChild(itemElement);
            });

            // Update total
            const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            document.querySelector('.cart-total').textContent = `Total: $${total.toFixed(2)}`;
            document.getElementById('btnCheckout').innerHTML =
                '<span id="checkoutAnimation" class="spinner-border" role="status" style="height:25px; width:25px; margin-right: 7px; display: none" aria-hidden="false"></span>' +
                "CHECKOUT &nbsp; C$" + total.toFixed(2);

            // Update cart button
            const itemCount = cart.reduce((sum, item) => sum + item.quantity, 0);
            //document.getElementById('cart-button').textContent = `Cart (${itemCount})`;

            localStorage.setItem("cart-quantity", itemCount);

            if (itemCount === 0) {
                cartItems.innerHTML = '<div class="empty-cart">Cart is empty</div>';
                document.getElementById('btnCheckout').style.display = 'none';
                document.querySelector('.cart-total').style.display = 'none';
                document.getElementById('cartPaymentMethodsDiv').style.display = 'none';
                //document.getElementById('cart-button').textContent = 'Cart (0)';
                document.getElementById('cart-items-count').style.display = 'none';
                document.getElementById('cart-items-count').innerHTML = '';
                document.getElementById('cartQuantity').value = "0";
                localStorage.setItem("cart-quantity", "0");
                return;
            }

            document.getElementById('cart-items-count').style.display = 'block';
            document.getElementById('cart-items-count').innerHTML = itemCount;
            document.getElementById('cartQuantity').value = itemCount;
        }

        // Update quantity
function updateQuantity(id, newQuantity) {
            if (newQuantity < 1) {
                removeItem(id, document.querySelector(`[onclick*="'${id}'"]`).parentElement.parentElement);
                return;
            }
            const item = cart.find(item => item.id === id);
            if (item) {
                item.quantity = newQuantity;
                updateCart();
            }
        }

        // Remove item with animation
        function removeItem(id, element) {
            element.classList.add('removing');
            
            setTimeout(() => {
                cart = cart.filter(item => item.id !== id);
                updateCart();
            }, 300); // Match this with the CSS animation duration
        }

window.onload = function () {
    const quantity = localStorage.getItem("cart-quantity");
    const button = document.getElementById('addToCartButton');
    
    if (quantity != null && button != null) {
        const id = button.dataset.id;
        const name = button.dataset.name;
        const price = parseFloat(button.dataset.price);

        const existingItem = cart.find(item => item.id === id);

        if (existingItem) {
            existingItem.quantity = parseInt(quantity);
        } else {
            cart.push({ id, name, price, quantity: parseInt(quantity) });
        }

        updateCart();
    }
};