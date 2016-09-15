# Project 4: Inhabitent WordPress Theme Development

Project 4 at RED was a big one. We spent two weeks learning the ins and outs of WordPress to be able to bring together this custom theme--Inhabitent. 

![Inhabitent Theme Image](./themes/inhabitent-theme/screenshot.png)


##About the Inhabitent Site

The Inhabitent site is meant to be part e-commerce, part blogging website for an imaginary store called Inhabitent Supply Co. 

###Technology Used

- WordPress 4.5
  * Use of Template Hierarchy
  * Custom Post Types
  * Custom Taxonomy Types
  * Using Template Parts
  * Plugin Building (custom shop hours plugin)
- Php (in the WP realm)
- HTML5
- SASS
- GULP Build Tool
- jQuery (WordPress built-in jQuery)
- GIT for version control.

###A Dive into WordPress.

To start out with, we were given a Starter theme as a baseline to begin this project, it was lightly based off the [Underscores](http://underscores.me/), but tailored for the students at RED. From there we got underway, taking the new lingo and techniques learned in class and applying it to this project.

While no actual e-commerce functionality is currently built into the site, we were required to create a custom post type specifically for a shop page to display all the products they "sell". Along with our Product post type, we needed to create a custom taxonomy type to better sort the products in the shop. 

These new custom post and taxonomy types we created lead way into navigating the Wordpress Template Hierarchy, to properly create the template pages needed to display the user-generated information.

The rest of the site was created using a mix of custom template pages, and creating smaller bite sized template parts to be reused in multiple pages. Using WordPress built-in functions we were able to dynamically generate content into the site for all of the pages/posts required. Oh, and lots of SASS!

We even got the opportunity to use Php in an OOP functionality to create a small WordPress Plugin for the "employees" of Inhabitent to update their hours of operation on the fly! This was a great way to see how to make a plugin useable from the admin side of WordPress and also for the front-end side where it displays in the widgetized sidebar.

##Meaningful Takeaways.

This project was another great foray into the wonderful world of SASS, as most of what we were required to do was style this multipage website. This being our first multipage site, it was a challenge trying to best organize all the styles from the get-go, and I feel like I struggled with it in the beginning. But it opened my eyes to how effective planning in the beginning, can save time later down the road. This will be something I try to prioritize better moving forward, so I can keep my code as DRY as I can.

I really enjoyed the incorporation of dynamically loaded content into the HTML5 structure. I felt using the main WP query, and the get_posts() function to be really beneficial and effective for writing minimal amounts of HTML, and allowed for many re-useable pieces to be created and utilized. I look forward to continuing to work with WordPress and even other methods of dynamically loading content onto the page in the future