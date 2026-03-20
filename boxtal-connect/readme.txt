=== Boxtal - Shipping solution ===
Contributors: Boxtal
Tags: shipping, delivery, parcel point, Mondial Relay, Chronopost
Requires at least: 4.6
Tested up to: 6.8.3
Requires PHP: 5.6.0
Stable tag: 2.0.0
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Negotiated rates for all types of shipping (home, relay, express, lockers, etc.). No subscription, no hidden fees.

== Description ==

Your orders are synchronized with your Boxtal account, where you can automate shipping rules to generate your shipping labels.

Ship with all types of carriers (Colissimo, Mondial Relay, Chronopost, Colis Privé, UPS, …), with or without insurance, options, ... You benefit from negotiated rates, without volume conditions, without subscription, without hidden costs.

Tracking is automatically synchronized with your orders and is available at any time in your customer’s account pages.

A single invoice for all your shipments and a single customer service to manage all delivery issues.

Add a parcel point map to your checkout.

This plugin rely on these third party services:
- Maplibre gl: https://github.com/maplibre/maplibre-gl-js
- tom-select: https://github.com/orchidjs/tom-select

Tools used to compile and minify this plugin's files:
- css: gulp, gulp-less, gulp-clean-css
- js: gulp, gulp-babel, gulp-terser

== Installation ==

= Minimum requirements =
* WooCommerce version: 2.6.14 or greater
* WordPress version: 4.6 or greater
* Php version: 5.6.0 or greater

= Step by step guide =

* Have a look here: https://help.boxtal.com/fr/en/article/getting-started-bc-wc

== Screenshots ==

1. Synchronize your orders, save time
2. Ship with the best carriers
3. A single invoice, a single customer service
4. A parcel point map in your checkout

== Changelog ==

2026-03-20 - version 2.0.0
* Implemented new order synchronization endpoints, which provide more complete information for orders and enable more efficient incremental synchronization

2025-12-23 - version 1.3.11
* Fixed an issue when trying to display a parcel point choice for a cart with no selected shipping method

2025-11-28 - version 1.3.10
* Fixed an issue when computing product prices with a quantity greater than 1

2025-11-25 - version 1.3.9
* Orders synchronization now use tax excluded prices

2025-11-13 - version 1.3.8
* Fixed parcel point issues with multiple packages
* Draft orders are now ignored when synchronizing orders
