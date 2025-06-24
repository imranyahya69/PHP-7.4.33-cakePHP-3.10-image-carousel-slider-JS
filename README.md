# PHP-7.4.33-cakePHP-3.10-image-carousel-slider-JS
A simple CakePHP 3.10 web app with a landing page and a Bootstrap 4 carousel of 4 auto-sliding images. Clean setup for beginners and small projects. #cakephp, #cakephp3, #bootstrap, #carousel, #landing-page, #php, #mvc, #webapp

````markdown
# 🎠 CakePHP 3.10 Landing Page with Image Carousel

This is a simple web application built using **CakePHP 3.10** that demonstrates how to create a landing page with a **Bootstrap 4 carousel** of 4 auto-sliding images.

## 🚀 Features

- CakePHP 3.10 framework
- Landing page route setup
- Responsive Bootstrap 4 image carousel
- Auto-sliding images with configurable interval
- Clean and modular file structure

## 📷 Carousel Demo

The landing page features a Bootstrap carousel with 4 images that slide automatically every 3 seconds.

## 📁 Project Structure

- `src/Controller/PagesController.php` – Contains the `landing()` action.
- `src/Template/Pages/landing.ctp` – Landing page view with Bootstrap carousel markup.
- `webroot/img/` – Folder for carousel images (`carousel1.jpg`, `carousel2.jpg`, etc.).
- `config/routes.php` – Defines the `/` route to the `Pages::landing` action.
- `src/Template/Layout/default.ctp` – Includes Bootstrap 4 CSS/JS via CDN.

## 🛠 Setup Instructions

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/cakephp-landing-carousel.git
cd cakephp-landing-carousel
````

### 2. Install Dependencies

```bash
composer install
```

### 3. Run the Application

```bash
bin/cake server
```

Open your browser and navigate to:
👉 [http://localhost:8765](http://localhost:8765)

### 4. Add Carousel Images

Place 4 images in the `webroot/img/` directory:

* `carousel1.jpg`
* `carousel2.jpg`
* `carousel3.jpg`
* `carousel4.jpg`

Make sure they are properly sized for display (e.g., 1200×600).

## ✅ Requirements

* PHP >= 7.2
* Composer
* CakePHP 3.10
* Web browser

## 📜 License

This project is open-source and available under the [MIT License](LICENSE).

Made with ❤️ using [CakePHP](https://cakephp.org/)
