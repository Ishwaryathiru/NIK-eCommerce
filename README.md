**NIK Ecommerce Web Page**

Welcome to the NIK Ecommerce web page repository! This web page is designed for NIK, the king of furniture. It includes a signup page with validations, and upon successful signup, the user's information is stored in the database, and they are directed to the home page.

**Features**
Signup Page with Validations: The web page includes a signup form with client-side and server-side validations to ensure accurate user information.

Database Integration: User information, such as name, email, phone number, address, and password, is stored in the database upon successful signup.

Homepage: After signup, users are directed to the home page of the website, providing a seamless and user-friendly experience.

Responsive Design: The web pages are designed to be responsive, providing an optimal viewing experience across a wide range of devices.

**Prerequisites**

Before you begin, ensure you have the following requirements:

-Web server (e.g., Apache, Nginx)
-PHP installed
-MySQL database

**Installation**
Clone the repository:
git clone https://github.com/Ishwaryathiru/NIK-Ecommerce.git

Set up the database:
Create a new database named nik_ecommerce in MySQL.
Import the nik_ecommerce.sql file to set up the necessary tables.

Configure the database connection:
Open the index.php file.

Modify the database connection parameters:
$conn = new mysqli('localhost', 'your-username', 'your-password', 'nik_ecommerce');

**Usage**

Access the signup page:

Open your web browser and navigate to http://localhost/NIK-eCommerce/signup.php.
Fill out the signup form:

Enter your name, email, phone number, address, and password.
Ensure that the entered information is valid.
Click the "Sign Up" button:

Upon clicking the "Sign Up" button, the information will be stored in the database.
Homepage:

After successful signup, you will be redirected to the home page of the NIK Ecommerce website.
Choose the furniture that you like to buy and click buy now and it leads to the payment page.
