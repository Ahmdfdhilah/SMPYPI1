# SMP YPI 1 BRAJA SELEBAH Website

![SMP YPI 1 BRAJA SELEBAH Logo](https://github.com/Ahmdfdhilah/SMPYPI1/blob/main/public/frontend/logo.png)

## Deskripsi
SMP YPI 1 BRAJA SELEBAH Website adalah situs web resmi SMP YPI 1 BRAJA SELEBAH yang dikembangkan menggunakan Laravel. Situs ini menyediakan informasi terkini seputar SMP YPI 1 BRAJA SELEBAH, termasuk berita, acara, dan profil sekolah.

# PENGEMBANGAN SISTEM INFORMASI SEKOLAH BERBASIS WEBSITE MENGGUNAKAN METODE AGILE

## Tim Pengembang:
1. **Ahmad Fadillah (121140173)**
   - *Job:* Project Manager + Backend Developer
   - *Email:* ahmad.121140173@student.itera.ac.id

2. **Defin Surjaniah (121140022)**
   - *Job:* Frontend Developer 1
   - *Email:* defin.121140022@student.itera.ac.id

3. **Ahmad Fathur Rohman (121140082)**
   - *Job:* Frontend Developer 2
   - *Email:* ahmad.121140082@student.itera.ac.id

4. **Aisa Setia Primastuti (121140092)**
   - *Job:* UI/UX Designer 1
   - *Email:* aisa.121140092@student.itera.ac.id

5. **Muhammad Alfarizi (121140093)**
   - *Job:* Frontend Developer 3
   - *Email:* muhammad.121140093@student.itera.ac.id

6. **Pannes Diba Sabila (121140117)**
   - *Job:* UI/UX Designer 2
   - *Email:* pannes.121140117@student.itera.ac.id

## Deskripsi Proyek:

Proyek ini bertujuan untuk mengembangkan Sistem Informasi Sekolah berbasis website dengan menerapkan metode Agile. Studi kasus dilakukan di SMP YPI1 Braja Selebah.

### Tujuan Proyek:

- Meningkatkan efisiensi manajemen sekolah melalui sistem informasi yang terintegrasi.
- Memberikan aksesibilitas yang lebih baik kepada guru, siswa, dan orang tua melalui platform web.
- Mengoptimalkan proses pembelajaran dan administrasi sekolah.

## Metode Pengembangan: Agile

Metode pengembangan yang digunakan dalam proyek ini adalah Agile, yang memungkinkan adaptasi cepat terhadap perubahan dan iterasi berkala untuk memastikan keterlibatan pemangku kepentingan yaitu pengurus sekolah SMP YPI 1 BRAJA SELEBAH.

## Kontak:

Jika ada pertanyaan lebih lanjut atau informasi tambahan, silakan hubungi Project Manager:

**Ahmad Fadillah**
- *Email:* ahmad.121140173@student.itera.ac.id
- *Telepon:* 089647107815

---


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

6. Run database migrations:

    ```bash
    php artisan migrate:fresh
    ```

7. Generate an application key:

    ```bash
    php artisan key:generate
    ```

8. Seed the database:

    ```bash
    php artisan migrate --seed
    ```

9. Compile frontend assets:

    ```bash
    npm run dev
    ```

10. Open a new terminal and start the Laravel development server:

    ```bash
    php artisan serve
    ```

Now, you should be able to access the application at [http://localhost:8000](http://localhost:8000).

Feel free to customize the instructions based on any additional steps required for your specific project or environment.
