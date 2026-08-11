# Assignments week 3

# HTML

## Assignment 1 - create a recipe for an omelette

The first assignment will be to recreate a webpage as shown in the assignment image. Few key elements like colors,
images, etc. will be provided for you. Please read the assignment thoroughly before starting. When completed the
following assignments will be regarding PHP functions, creating functions and using already available functions to
complete the assignment. Good luck!

**Implement the following**

View the image below. Recreate the website shown to the best of your abilities.

![assignment-week-03a.jpeg](images/assignment-week-03a.jpeg)

Width, Height and placement: No specifics are supplied regarding the width, height or placement of the webpage. Do your
best to recreate the image.

Colors: The following colors are supplied along with the hsl to create them using CSS. If you don’t know how to use hsl
to provide colors, please visit this page: https://developer.mozilla.org/en-US/docs/Web/CSS/color_value/hsl

* White – hsl(0%, 0%, 100%)
* Stone 100 – hsl(30, 54%, 90%)
* Stone 150 – hsl(30, 18%, 87%)
* Stone 600 – hsl(30, 10%, 34%)
* Stone 900 – hsl(24, 5%, 18%)
* Brown 800 – hsl(14, 45%, 36%)
* Rose 800  – hsl(332, 51%, 32%)
* Rose 50   – hsl(330, 100%, 98%)

Fonts: The standard font-size is 16px. Please set the font-size on the <body> using CSS. The following information is
provided:

* Font-Family: Young-Serif; font-weights: 400. Font-Family: Outfit; font-weights: 400, 600, 700.

* Font-family and font-weight are CSS elements that are used to style text. The fonts will be supplied as files in the
  ‘fonts’ folder.

Use the following line in your CSS to add this new font:

```css
@font-face {
    font-family: "name-of-your-font";
    src: url("link to your fontfile");
}

body {
    font-family: “name-of-your-font”
}
```

Images: Images are supplied via the img folder.

# PHP Programming

This weeks assignments are about writing functions. 

## Assignment 1 - compare to 100

Implement the following

Create a function that is able to compare a provided number (via parameters) to the number 100. Provide a custom output
when the number is higher, lower and equal to the number 100.

## Assignment 2 - your diet 

Implement the following

Write a function that returns a list of nutrients in a an HTML table format. The list should be styled using CSS.

The function takes 5 parameters of which the first 4 are numbers: Calories, Carbs, Protein and Fat. The last parameter
is a Boolean (TRUE or FALSE). Based on the Boolean the final input of the list should say if it fits your diet (Diet
approved/disapproved).

## Assignment 3 - Video parental checks

Implement the following

A customer has asked you to create an function that will automatically index registrations for his video store website.
The following conditions must be incorporated into the application. Based on several factors, a message will be built
and returned to the customer.

1. If the user is under 18, the message will contain a warning saying the user is not old enough to register.
2. When the user is a woman, the message will inform the user about an upcoming ladies night event in the video store.
3. If the user has recently visited the website, the message will say that a discount will be applied during checkout.
4. When all three of the conditions stated before have been met, instead of a message the user will see a big red
   WARNING!!!.

Because of the testing phase the website is in, it is sufficient to show simple messages on the screen (echo). When
several conditions are correct, please show all messages. When condition 4 is correct, please show only this message.

