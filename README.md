## Simple Invoicing System

Before running, make sure that your local machine has PHP and Composer installed.

## Setup Project

1. Clone repository:
   ``git clone https://github.com/ThangNguyen153/invoicing-system.git``
2. Edit ``.env`` file: please create a new database first and update DB Configuration
    ```
   DB_CONNECTION=mysql
   DB_HOST=your db host ip
   DB_PORT=your db port
   DB_DATABASE=your db name
   DB_USERNAME=your db user
   DB_PASSWORD=your db password
   ```
3. Install vendor:
    ``composer install``
4. Run migrations: 
    ``php artisan migrate``
5. Run virtual server:
    ``php artisan serve``
6. Publish PDF libary asset:
    ``php artisan vendor:publish --provider="Barryvdh\DomPDF\ServiceProvider"``

## Feature Explaination:

- Your default account will be:
    ```
        username: tomnguyen
        password: 123456
    ```
- Access this link to log in: ``http://127.0.0.1:8000``
- After logging in successfully, you will be redirected to Dashboard page
- Dashboard page includes:
    ```
  1 notification message at the top
  3 page links:
    Click on the text to go to the page you want to. 
     For example: click on "Click here to go to Fruit page"
    to go to FRUIT page
  ```
- Fruit Category page includes List of Fruit Categories on the left and Create New Fruit Category form on the right  
- Fruit page includes List of Fruits on the left and Create New Fruit form on the right
- Invoice page includes:
  - Create new invoice link on the left (click on the text "Click here to create new invoice
    ")
  - Each table in the center of page represents for an Invoice information
  - There are 3 action links/button on the right of a table:
    - "Click here to edit": your will be redirected to Edit Invoice page
    - button "Delete Invoice": delete current invoice
    - "Click here to export": export current invoice
- Before creating an Invoice, please make sure to create at least 1 fruit category and fruit item
- Add/Edit Invoice form has a button "Add Fruit" to allow you add multiple fruit items for an invoice

## Routes

1. Login screen: ``http://127.0.0.1:8000``
2. Dashboard: ``http://127.0.0.1:8000/dashboard``
3. Fruit Category screen: ``http://127.0.0.1:8000/fruit-category``
4. Fruit screen: ``http://127.0.0.1:8000/fruit``
5. Invoice screen: ``http://127.0.0.1:8000/invoice``
6. Add Invoice screen: ``http://127.0.0.1:8000/add-invoice``
7. Edit Invoice screen: ``http://127.0.0.1:8000/edit-invoice?id= your invoice id``


