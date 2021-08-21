<!--
*** Thanks for checking out the Best-README-Template. If you have a suggestion
*** that would make this better, please fork the repo and create a pull request
*** or simply open an issue with the tag "enhancement".
*** Thanks again! Now go create something AMAZING! :D
***
***
***
*** To avoid retyping too much info. Do a search and replace for the following:
*** jpgomezt, MovieTown, twitter_handle, jpgomezxt@gmail.com, MovieTown, An online movie rental and sale page
-->

<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->

<!-- PROJECT LOGO -->
<br />
<p align="center">
  <a href="https://github.com/jpgomezt/MovieTown">
    <img src="public/img/logos/movietown-transparent.png" alt="Logo" width="800" height="800">
  </a>

  <h3 align="center">MovieTown</h3>

  <p align="center">
    An online movie rental and sale page
    <br />
    <a href="https://github.com/jpgomezt/MovieTown/wiki"><strong>Explore the Wiki »</strong></a>
    <br />
    <br />
    <a href="https://github.com/jpgomezt/MovieTown">View Demo</a>
    ·
    <a href="https://github.com/jpgomezt/MovieTown/issues">Report Bug</a>
    ·
    <a href="https://github.com/jpgomezt/MovieTown/issues">Request Feature</a>
  </p>
</p>

<!-- TABLE OF CONTENTS -->
<details open="open">
<summary><h2 style="display: inline-block">Table of Contents</h2></summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgements">Acknowledgements</a></li>
  </ol>
</details>

<!-- ABOUT THE PROJECT -->

## About The Project

[![Product Name Screen Shot][product-screenshot]](https://example.com)

This is a proyect of an online movie rental and sale page using Laravel.

### Built With

-   [Laravel](https://github.com/laravel/laravel)

<!-- GETTING STARTED -->

## Getting Started

To get a local copy up and running follow these simple steps.

### Prerequisites

You will need to have PHP version 7.4 or greater installed to be able to use the project.

You can check out PHP here:

-   [PHP](https://www.php.net/downloads)

You will also need to have Composer installed .

You can check out Composer here:

-   [Composer](https://getcomposer.org/download/)

### Installation

1. Clone the repo
    ```sh
    git clone https://github.com/jpgomezt/MovieTown.git
    ```
2. cd into the project
    ```sh
    cd MovieTown
    ```
3. Install Composer Dependencies
    ```sh
    composer install
    ```
4. Create a copy of your .env file
    ```sh
    cp .env.example .env
    ```
5. Generate an app encryption key
    ```sh
    php artisan key:generate
    ```
6. Create an empty database for the application
   You can use your favorite development environment. I recommend you look at options like MAMP or XAMPP.
   Make sure you name the database **`movietown`**.
7. Add database information in the .env file
   We want to allow Laravel to connect to the database that you just created in the previous step. To do this, we must add the connection credentials in the .env file and Laravel will handle the connection from there.
   In the .env file fill in the `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` options to match the credentials of the database you just created.
8. Migrate the database
    ```sh
    php artisan migrate
    ```
9. Seed the database
    ```sh
    php artisan db:seed
    ```
10. Run the project
    You can run the project by using your development environment or you may use the `serve` Artisan command:
    ```sh
    php artisan serve
    ```

<!-- USAGE EXAMPLES -->

## Usage

Use this space to show useful examples of how a project can be used. Additional screenshots, code examples and demos work well in this space. You may also link to more resources.

_For more examples, please refer to the [Documentation](https://example.com)_

<!-- ROADMAP -->

## Roadmap

See the [open issues](https://github.com/jpgomezt/MovieTown/issues) for a list of proposed features (and known issues).

<!-- CONTRIBUTING -->

## Contributing

Contributions are what make the open source community such an amazing place to be learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<!-- LICENSE -->

## License

GNU GENERAL PUBLIC LICENSE Version 3. See `LICENSE` for more information.

<!-- CONTACT -->

## Contact

Your Name - [@twitter_handle](https://twitter.com/twitter_handle) - jpgomezxt@gmail.com

Project Link: [https://github.com/jpgomezt/MovieTown](https://github.com/jpgomezt/MovieTown)

<!-- ACKNOWLEDGEMENTS -->

## Acknowledgements

-   []()
-   []()
-   []()

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->

[contributors-shield]: https://img.shields.io/github/contributors/jpgomezt/repo.svg?style=for-the-badge
[contributors-url]: https://github.com/jpgomezt/MovieTown/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/jpgomezt/repo.svg?style=for-the-badge
[forks-url]: https://github.com/jpgomezt/MovieTown/network/members
[stars-shield]: https://img.shields.io/github/stars/jpgomezt/repo.svg?style=for-the-badge
[stars-url]: https://github.com/jpgomezt/MovieTown/stargazers
[issues-shield]: https://img.shields.io/github/issues/jpgomezt/repo.svg?style=for-the-badge
[issues-url]: https://github.com/jpgomezt/MovieTown/issues
[license-shield]: https://img.shields.io/github/license/jpgomezt/repo.svg?style=for-the-badge
[license-url]: https://github.com/jpgomezt/MovieTown/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/jpgomezt
