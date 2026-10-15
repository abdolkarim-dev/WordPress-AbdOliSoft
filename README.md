<div align="center">

<h1>🌆 WordPress-AbdOliSoft</h1>
 
🌿 WordPress AbdOliSoft

<div align="center">

A Modern, Responsive Custom WordPress Theme

A custom-designed website for a fictional software development company, built from scratch with PHP, WordPress, and Tailwind CSS.

</div>

📸 Screenshots

<div align="center">
  <img src="screenshots/home.png" width="48%" alt="AbdOliSoft Homepage" />
  <img src="screenshots/about.png" width="48%" alt="AbdOliSoft About Page" />
  <img src="screenshots/services.png" width="48%" alt="AbdOliSoft Services Page" />
  <img src="screenshots/projects.png" width="48%" alt="AbdOliSoft Projects Page" />
</div>

✨ About the Project

AbdOliSoft is a modern, responsive company website designed to showcase software development services, projects, and company information through a clean and professional user interface.

The project was developed as a custom WordPress theme rather than relying on a pre-built theme or third-party WordPress plugins. It combines PHP-based WordPress templates with Tailwind CSS to create a flexible website with a consistent visual identity and responsive layouts.

The main goal was to build a maintainable, lightweight theme while gaining practical experience with WordPress theme development, PHP integration, custom functionality, and modern frontend styling.

🚀 Features

🎨 Modern UI/UX

Clean, minimal, and professional visual design

Consistent typography, spacing, colors, and components

Modern layouts with carefully designed sections

Smooth transitions and interactive UI elements

Green, white, and dark color palette

Reusable styling patterns with Tailwind CSS

📱 Fully Responsive Design

Responsive layouts for mobile, tablet, laptop, and desktop

Mobile-friendly navigation menu

Adaptive page sections and content layouts

Responsive spacing, typography, and components

Consistent experience across different screen sizes

🧩 Custom WordPress Theme

Developed from scratch using PHP and WordPress

Custom theme templates and reusable PHP components

WordPress theme functions and hooks

Dynamic navigation using WordPress menu management

Integration with WordPress search functionality

Organized theme logic and supporting PHP files

No third-party WordPress plugins required for the theme's implemented functionality

🔎 Navigation & Search

Responsive website navigation

Dynamic menu items managed through WordPress

Search interface integrated with WordPress search

Interactive search controls and mobile navigation

📄 Main Pages

Home — Introduction, key sections, services, and project highlights

About Us — Company information and background

Services — Presentation of software development services

Projects — A dedicated page for showcasing projects

Contact — Contact-related functionality and communication interface

Search Results — Displays results through WordPress search

🛠️ Tech Stack

Technology

Purpose

WordPress

Content management system and theme platform

PHP

Theme templates, WordPress integration, and custom functionality

Tailwind CSS v4

Utility-first styling and responsive layouts

HTML5

Semantic page structure

CSS3

Custom styling, typography, and transitions

JavaScript

Interactive frontend behavior

npm

Frontend development tooling

Git & GitHub

Version control and project hosting

🧠 What I Practiced

This project helped me develop practical experience in:

Building a custom WordPress theme from scratch

Working with PHP templates and WordPress theme functions

Using WordPress hooks and template conventions

Creating responsive interfaces with Tailwind CSS v4

Integrating dynamic WordPress navigation and search

Separating theme functionality into organized PHP files

Combining frontend design with WordPress functionality

Developing and testing a website in a local WordPress environment

⚙️ Getting Started

Prerequisites

Make sure you have the following installed:

PHP and a local web server

WordPress

Node.js and npm

Git (optional, for cloning the repository)

1. Clone the Repository

git clone https://github.com/abdolkarim-dev/WordPress-AbdOliSoft.git

2. Install WordPress

Set up a local WordPress installation using your preferred local development environment.

3. Install the Theme

Copy the cloned theme folder into your WordPress themes directory:

wp-content/
└── themes/
└── WordPress-AbdOliSoft/

Then open the WordPress dashboard, navigate to Appearance → Themes, and activate the AbdOliSoft theme.

4. Install Dependencies

Open a terminal in the theme directory and run:

npm install

5. Start Tailwind CSS

Run the development script to compile Tailwind CSS and watch for changes:

npm run dev

The compiled stylesheet is generated at src/output.css.

Keep this process running while developing so that Tailwind CSS can update the generated stylesheet as you modify your source files.

6. Open the Website

Visit your local WordPress website in a browser to explore the theme and its pages.

📂 Project Structure

WordPress-AbdOliSoft/
├── inc/
│ ├── setup.php
│ ├── theme.php
│ ├── council.php
│ ├── benefactor.php
│ ├── mayor.php
│ ├── site-settings.php
│ └── contact.php
├── src/
│ ├── input.css
│ ├── output.css
│ ├── style.css
│ ├── script.js
│ └── font/
├── 404.php
├── functions.php
├── header.php
├── footer.php
├── index.php
├── page-about.php
├── page-services.php
├── page-projects.php
├── single.php
├── search.php
├── style.css
├── package.json
├── package-lock.json
├── screenshots/
└── README.md

The structure above highlights the main files and directories. Some files may vary as the project evolves.

🌐 Responsive Experience

The theme is designed to adapt its layout to different viewport sizes. Navigation, content sections, and page components adjust to provide a consistent browsing experience on both desktop and mobile devices.

🔐 Dependencies & Plugins

The theme uses WordPress core functionality and a small frontend toolchain for styling. No third-party WordPress plugins are required for the functionality implemented in this project.

Tailwind CSS is compiled locally through its CLI, allowing the theme's styling to be maintained alongside the source files.

📌 Project Status

This repository contains the custom WordPress theme source code, not a complete WordPress installation or database export.

To run the website locally, install WordPress first, add the theme to the themes directory, activate it, and compile the stylesheet.

👨‍💻 Author

Abdolkarim Bazdar

Mid-Level Web Developer focused on frontend development, React, TypeScript, WordPress, PHP, and Tailwind CSS.

GitHub: @abdolkarim-dev

Project Repository: WordPress-AbdOliSoft

📄 License

This project is licensed under the MIT License. See the LICENSE file for details.

<div align="center">

Built from scratch with PHP, WordPress, and Tailwind CSS.

If you find this project interesting, feel free to explore the repository.

</div>
