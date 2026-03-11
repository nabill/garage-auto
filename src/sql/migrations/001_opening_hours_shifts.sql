-- Migration 001: Add second shift columns to opening_hours
ALTER TABLE opening_hours
    ADD COLUMN open_time2  TIME NULL AFTER close_time,
    ADD COLUMN close_time2 TIME NULL AFTER open_time2;
