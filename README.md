# Project for my portfolio: Portfolio site

## Project Title: 
Sara Mäkinen - Simple Portfolio Site

## Table of contents
- [Project overview](#project-overview)
- [Goals & requirements](#goals--requirements)
- [Tech stack](#tech-stack)
- [My process and approach](#my-process-and-approach)
- [Challenges](#challenges)
- [Results and outcome](#results-and-outcome)
- [What I would do differently](#what-i-would-do-differently)
- [Links](#links)

## Project overview:
This is a simple Portfolio Site. I designed this site for a fictional designer. She has mostly worked with Nordic brands. Unlike a standard page-builder site, this portfolio uses a custom post type with Advanced Custom Fields and PHP templates to manage and display work dynamically.
## Goals & requirements: 
Custom portfolio structure built with CPT and ACF, the images should be big and clean. A page for the portfolio, a template for single project and single category.
## Tech stack:
- Astra-theme
- ACF and CPT UI plugins
- PHP-templates
- Local
## My process and approach: 
I started with researching how existing portfolio themes structure their content, to decide what features mattered most. I decided on a few core fields for each portfolio entry: an image, heading, year, category and description. I kept the fields minimal to stay focused on the visual work. I structured the category as a taxonomy (landed on packaging, branding and prints). I then took about 45 minutes to look for images and make up the projects for the portfolio. 

I set up my environment, downloaded the theme and plugins. First I set up the custom post type and the advanced custom fields for the portfolio projects. Once the CPT and ACF setup was complete, I moved on to building the templates and styling. For the templates I did archive, single post and taxonomy templates. I started with an archive template, because it was the main portfolio page. I asked AI to do a basic structure for me, then I got to know every line in the code and modified it to match my plan for the portfolio. The single post template shows one project dynamically: name, image and meta information: year, description and category. The taxonomy is almost the same as the archive, but it shows work that belongs to a specific category. The taxonomy template has a different heading than archive and it also shows the category description.
## Challenges
- Problem 1: To get ACF and CPT to work together. I don’t know if I made those in the wrong order or was it just new for me. I also had trouble making all those fields to show up in my template because of some spelling mistakes (classic).
- Problem  2: Finding good images. I used Pixabay to look for copyright free images and it was hard to find images that would look like it would be made by one person. 
- Problem 3: To make the PHP-templates work for the first time. I made some wrong naming choices, so it was kind of tricky to keep up with underscore and hyphens. 
## Results and outcome 
![](/screenshots/archive-template.png)
Archive-template on site. 
![](/screenshots/single-post-template.png)
Single post -templte on site.
![](/screenshots/ACF-editor.png) 
Advanced custom fields in the editor view.
## What I would do differently: 
I think I would make it with just ACF. The CPT UI plugin added unnecessary complexity and I sometimes lost track of where to manage my custom post type settings. The next time with PHP-template would also be easier, so I think that the template itself can be cleaner and faster to work with. In the next project I can use these templates as a reference. 
## Links 
My project in GitHub [add link here later] and live [add link here later]

