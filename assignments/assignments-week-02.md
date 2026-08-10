# Assignments week 2

Here you will find

# HTML and CSS assignments

## Assignment 1

See the two websites below. Navigate to them and do all the exercises. This will greatly enhance your skills with the
flexbox and grid.

* [CSS Grid Garden](https://cssgridgarden.com/)
* [CSS Flex Froggy](https://flexboxfroggy.com/)

## Assignment 2: rebuild a Mondriaan like painting in HTML

Having a lot of experience now in the use of `display:grid` you can work on the next exercise.

Build the following "painting" in a website using `display:grid`. The "painting" consists of the red/blue/white/yellow
squares. The pink border is considered the painting's frame.

Requirements:

* use a `display:grid`
* do not work with hard measurements like `10px` for the painting shapes.
* use only one container (e.g. `section`) as the parent for all the painting shapes.

![assignment-week-02a.png](images/assignment-week-02.png)

Information about this assignment:

* background color surrounding the image is `hotpink`.
* the `hotpink` border is 20px wide/height.
* the total area is 600x600 pixels.
* this black lines are 3px thick.

## Assignment 3 :Create your own facebook

Look at the two images below. This is a facebook directory of all the employees in your virtual company. The directory
should show all employees on 'cards' separated by a small 'gap'. There should be as many persons on a 'row' as possible.

Images: courtesy of [This person does not exist](https://thispersondoesnotexist.com/). Look at the folder
`/assignments/avatars` for all the images. 

![facebook-2.png](resources/week-02/facebook-2.png)

When the page is larger than the space in the browser, a vertical scrollbar must be added. Have a look at the example.

![facebook-1.png](resources/week-02/facebook-1.png)

This can be done using the `overflow: auto` instruction on the container. 

**Assignment**

* Create this page using the list of images.
* requirements
  * use `display:flex`
  * card size is 80x100 pixels
  * use header H1 and H2 for top 'My company' and 'Our Employees'
  * names do not matter and may be copied or replaced at your own liking.
  * footer must have a black line above it.
  * use the real Copyright HTML entity instead of (c)

Hints:
* use the `vh` and `vw` units in combination with `height` and `width` using a `calc()` function in CSS.

When you managed to create the page start experimenting with values for `justify-content` and `align-items` 

# PHP Programming assignments

# Assignment 1: Calculation with dates

Create a variable called date and store the following number 14062016. This number stands for 14th of June 2016.

Use the operators Modulo (%) and Division (/), and only these operators, to extract the day, month and year in different
variables. Your answer should work with all different possibilities for variable date.

## Assignment 2: Programming with Conditionals

Implement the following decision table using PHP in combination with HTML. Define a variable and set it to a value
between zero and 20. Use PHP conditionals to determine the 'Result'.

Implement this decision table using three types of PHP conditionals:

1. IF-THEN
2. SWITCH
3. MATCH

| Digit   | Result           |
|---------|------------------|
| < 1     | "Invalid figure" |  
| 1, 2, 3 | "Very bad"       | 
| 4, 5    | "Insufficient"   |
| 6, 7    | "Sufficient"     | 
| 8       | "Good"           |
| 9       | "Very good"      | 
| 10      | "Excellent"      |
| \> 10   | "Invalid figure" |   

# References

* [PHP if/then/else](https://www.php.net/manual/en/control-structures.elseif.php)
* [PHP switch](https://www.php.net/manual/en/control-structures.switch.php)
* [PHP match](https://www.php.net/manual/en/control-structures.match.php)


