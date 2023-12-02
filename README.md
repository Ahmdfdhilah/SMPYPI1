# SMP YPI 1 BRAJA SELEBAH Website

![SMP YPI 1 BRAJA SELEBAH Logo](/frontend/logo.png)

## Deskripsi
SMP YPI 1 BRAJA SELEBAH Website adalah situs web resmi SMP YPI 1 BRAJA SELEBAH yang dikembangkan menggunakan Laravel. Situs ini menyediakan informasi terkini seputar SMP YPI 1 BRAJA SELEBAH, termasuk berita, acara, dan profil sekolah.

## Installation

Follow these steps to set up the project on your local machine:

1. Clone the repository:

    ```bash
    git clone https://github.com/Ahmdfdhilah/SMPYPI1
    ```

2. Change into the project directory:

    ```bash
    cd SMPYPI1
    ```

3. Create a `.env` file by copying the `.env.example` file and adjusting it according to your local environment:

    ```bash
    cp .env.example .env
    ```

4. Install PHP dependencies:

    ```bash
    composer install
    ```

5. Install Node.js dependencies:

    ```bash
    npm install
    ```

6. Install Bootstrap Icons:

    ```bash
    npm i bootstrap-icons
    ```

7. Install Flowbite:

    ```bash
    npm install flowbite
    ```

8. Run database migrations:

    ```bash
    php artisan migrate:fresh
    ```

9. Generate an application key:

    ```bash
    php artisan key:generate
    ```

10. Seed the database:

    ```bash
    php artisan migrate --seed
    ```

11. Compile frontend assets:

    ```bash
    npm run dev
    ```

12. Open a new terminal and start the Laravel development server:

    ```bash
    php artisan serve
    ```

Now, you should be able to access the application at [http://localhost:8000](http://localhost:8000).

Feel free to customize the instructions based on any additional steps required for your specific project or environment.
