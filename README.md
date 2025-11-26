# 📝 Task Management App

A web-based Task Management System built using the **Laravel PHP Framework**. This application allows users to organize their daily activities by creating, updating, and tracking tasks efficiently. It demonstrates the implementation of **CRUD operations** and **MVC architecture**.

## 🚀 Features

*   **Create Tasks:** Add new tasks with descriptions.
*   **View Tasks:** Display a list of all pending and completed tasks.
*   **Update Tasks:** Edit task details.
*   **Delete Tasks:** Remove tasks that are no longer needed.
*   **Validation:** Server-side validation for form inputs.
*   **Responsive UI:** Clean interface built with Blade Templates and CSS.

## 🛠️ Technology Stack

*   **Framework:** Laravel (PHP)
*   **Frontend:** Blade Templating Engine, HTML5, CSS3, JavaScript
*   **Database:** MySQL
*   **Server Environment:** Apache / Nginx



## ⚙️ Installation & Setup

Follow these steps to run the project locally:

1.  **Clone the Repository**
    ```bash
    git clone [https://github.com/NishadiSS/Task-App-Laravel.git]
    cd Task-App-Laravel
    ```

2.  **Install Dependencies**
    ```bash
    composer install
    npm install
    ```

3.  **Environment Configuration**
    Copy the `.env.example` file to `.env`:
    ```bash
    cp .env.example .env
    ```
   

4.  **Generate App Key**
    ```bash
    php artisan key:generate
    ```

5.  **Run Migrations**
    Set up the database tables:
    ```bash
    php artisan migrate
    ```

6.  **Run the Application**
    Start the local development server:
    ```bash
    php artisan serve
    ```
    Access the app at: `http://localhost:8000`

## 🤝 Contributing

Contributions are welcome! Feel free to open issues or submit pull requests.

## 📄 License

This project is open-source and available under the [MIT License](LICENSE).
