# Assignments week 5 - Forms and Form Handling

Week 5 is in regards to the creation of forms and handling of form input. The following assignments will relate to the
form as seen below.

## HTML - create a form

![assignment-week-05-01a.png](images/assignment-week-05-01a.png)

Look at the illustration above. Create this form on a new file. Mimic the design to the best of your abilities.

Here are the instructions:

* Width, Height, and Placement: No details are provided regarding the width, height, or placement of the web page. Do
  your best to mimic the image.
* Color: No specific colors are given. The background is allowed to be any variation of the color ‘gray’.
* Fonts: The default font size is 18px. Set the font size to the `<body>` using CSS.

### Task 1a

Create the form as shown. Use the appropriate `<input>` variations where applicable.

### Task 1b

Add a checkbox option and a radiobutton option. Make it so that the options fit the rest of the form both in style as in
purpose.

### Task 1c

Make a simple validation of the form. For now the only validation is that no option is allowed to be empty. Use the
filter_input and empty functions that are available in PHP.

### Task 1d

When the user submits and all ‘validation’ is passed, please echo the provided input in an html valid stylized manner.
Valid output needs to have a green color. When the user submits and there are errors, show all the errors at once.
Errors have a red color.

## Task 2: Change your validation so that you are able to validate the following options:

* Name (both first and last) has to be minimum of 5 characters and contains at least 1 uppercase character.
* The email needs to be valid. Valid in this case means, contains an @ and ends in .eu

Street address line 1 cannot be empty, but street address line 2 can be empty. When submitted, if the street address
line 2 is empty, it should output the school’s address as the output for street address line 2.

## Task 3 – advanced  browser validation using regular expressions

When the user is typing, the border of the current input should change color based on the validation rules set above.
Every time the input changes, the content of the input needs to be checked according to the validation rules and the
border needs to change based on if the content is valid or invalid. Green for valid, red for invalid.

Extend the validation to only allow valid emails (real emails), valid postal/zip codes (only dutch ones) and valid phone
numbers (mobile and numbers from the Netherlands).  