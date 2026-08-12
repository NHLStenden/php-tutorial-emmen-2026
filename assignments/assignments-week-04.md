# Week 4 - assignments

Assignment week 4 · Grid Design, Arrays and Loops

This week we are going to practice using grids again. This time with a more complex design that needs to be realized.
Next, we will practice creating and manipulating arrays, a standard tool that is used for this is a 'loop'. This week
there is an 'advanced' version for some exercises. These only need to be made when there is an interest in them.

# HTML and CSS

## Assignment 1 -

Implement the following

Look at the illustration of below. Realize this website with the help of a grid (and a flexbox where possible). Take
your time with this, there are many details that make the final realized product very interesting.

You should realize this in such a way that a mobile version will also be correctly viewable.

Normal view:

![assignment-week-04 - desktop-design.jpg](images/assignment-week-04%20-%20desktop-design.jpg)

Possible mobile view:

![assignment-week-04 - mobile-design.jpg](images/assignment-week-04%20-%20mobile-design.jpg)

Here are the instructions:

Width, Height, and Placement: No details are provided regarding the width, height, or placement of the web page. Do your
best to mimic the image. If it doesn't work, a total width of 1440px may be used.

Color: The following colors are included with the hsl to make them with using CSS. If you don't know how to use hsl to
give colors, visit Then this page: https://developer.mozilla.org/en-US/docs/Web/CSS/color_value/hsl

* Purple 100 – hsl(254, 88%, 90%)
* Purple 500 – hsl(256, 67%, 59%)
* Yellow 100 – hsl(31, 66%, 93%)
* Yellow 500 – hsl(39, 100%, 71%)
* White – hsl(0, 0%, 100%)
* Black – hsl(0, 0%, 7%)

Fonts: The default font size is 18px. Set the font size to the <body> using CSS. The following information is provided.

* Font family: DM-Sans; font-weights: 400, 500.

Use the following line in your HTML (in the <head>) to add this new font:
```html
 <link rel="preconnect" href="https://fonts.googleapis.com"> 
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
 <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet"> 
```

Then, use the following css rule to apply DM Sans:

```css

font-family:"DM Sans";
sans-serif font-optical-sizing: auto; 
font-style: normal;
```

The `font-weight` you can choose yourself.

**Resources**

See the `resources/week-04` folder for the images and fonts you need. Almost all images are of the new WEBP
format, these can be used in the same way as 'standard' images.

# PHP Programming

## Colorwheel

Task 1a: Create an array called 'colorwheel' with about 6 different colors. These may be of your own choice. Next,
create a function named ‘outputColor’ that doesn't accept a parameter. This function, when invoked, will create a random
integer between 1 and 6 (including 1 and 6 as options, use the rand_int function of PHP). Based on this number, a color
will be chosen from the array and displayed.  
P.S. think about the scope of the function and the possible placement of the array!

Task 1b: Make a copy of Task 1a's answer and modify it so that 2 colors have a double chance of being chosen relative to
the other colors.

Task 1c – advanced: Make a copy of the answer from Task 1a and modify it so that the previous color shown has only half
a chance of being shown relative to the other colors. In the first round, there is no previous color shown and all
colors have the same chance of being chosen.

## Areacodes

Task 2a: Create an array called 'areacodes' and place the following numbers in this exact sequence in the array: 14, 26,
12, 58, 34, 66, 7, and 41. Write a function that looks up the highest number in the array and displays it on the screen.

Task 2b: Create a function that can search for a number within this array, when found it gives a success! message that
also contains the number found. Also, give it a fail! message when the number is not found.

Task 2c – Advanced: Rewrite the search function of Task 2b, but expands the function with the ability to search for
multiple numbers. Give a comprehensive success and fail message when applicable. The success message must include how
many times the number you are looking for has been found in the array.

# Creating shapes. 
Task 3a: Build the following 'shapes' using loops and echoes. An echo may contain only a single asterisk (*). Make use
of `<br>` or '\n' when needed. Violating the `<br>` within a `<p></p>` rule is permitted.

![assignment-week-04-03-1.png](images/assignment-week-04-03-1.png)

Task 3b: Choose at least 3 shapes from Appendix 2 to recreate.

Task 3c – advanced: Create a function that represents the fibonacci sequence, with commas between the numbers. This
function accepts a single parameter called 'count'. Parameter count is used to determine how many numbers of the
fibonacci sequence are displayed.

