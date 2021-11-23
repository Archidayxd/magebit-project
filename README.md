README

What was done:

Task 1

- The page is as pixel-perfect (Except background image)
- Bootstrap or similar frameworks are not used
- The page is responsive for all devices
- All URLs on-page is “#”. They do not lead anywhere
- Social icons have hover effects as per style guides
- Hover effects are present on the site
- A font with custom icons is used
- SCSS CSS preprocessor is used

Task 2

There is an error message under input that shows validation messages if:

- Invalid email is added - “Please provide a valid e-mail address”
- The checkbox is not marked - “You must accept the terms and conditions” (HTML and JS checks this)
- No email address is provided - “Email address is required” (HTML and JS checks this)
- Provided email is ending with .co - “We are not accepting subscriptions from Colombia emails”. (HTML and PHP checks this)
- Once validation has passed, the error disappears.
- The button is disabled if the form is not valid.
- On successful validation, a success message appears in the place of the form, as per design

Task 3

- Data that is submitted is saved in a MySQL database.
- Adjusted the functionality from previous Task so that success message appears only after form submit instead of successful validation.

A page is created where all saved data can be seen:

- No login
- No styles
- Sorting by name and date is added (by default it sorts data by date) It is possible to search for email addresses and use filters and sorting at the same time
- It is possible to search for email addresses and use filters and sorting at the same time
- It is possible to delete email addresses.
- It is possible to select multiple emails using checkboxes and export them as CSV.

What NOT was done:

- It is not possible to filter email addresses by email providers
- Data is validated also in PHP, and if JavaScript is disabled it not displays errors in the "same" place and (If JS disabled html and php checks if email is correct / ending on co or checkbox not checked, but in not shows errors in the «same» place as js do)
- No MVC pattern 
