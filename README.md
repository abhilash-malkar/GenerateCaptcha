# GenerateCaptcha

GenerateCaptcha is a PHP-based project for dynamic CAPTCHA code generation with support for various letter styles. CAPTCHA (Completely Automated Public Turing test to tell Computers and Humans Apart) is a common security mechanism used to prevent automated bots from submitting forms on websites.

This project provides a PHP script to create CAPTCHA images with randomized characters and fonts. You can easily integrate this CAPTCHA generation script into your web applications to enhance security.

## Features

- Dynamic CAPTCHA generation in PHP.
- Randomized characters to prevent predictability.
- Support for various letter styles and fonts.
- Customizable CAPTCHA length and image dimensions.

## Getting Started

Follow these steps to get started with GenerateCaptcha:

1. **Clone the Repository**

   ```shell
   https://github.com/abhilash-malkar/GenerateCaptcha.git
	```
2.	**Configure Your Web Server**
Ensure that you have a web server environment (e.g., Apache, Nginx) set up on your system. You can use tools like XAMPP or WAMP for local development.
3.  **Configure CAPTCHA Settings**
    
    Customize the CAPTCHA settings in the `showCaptcha.php` file according to your requirements. You can adjust the CAPTCHA length, image dimensions, and fonts.
    
4.  **Run the Application**
    
    Access the `showCaptcha.php` script through your web browser. For example, if you're using a local development environment, you can access it at `http://localhost/GenerateCaptcha/index.php`.
    
5.  **Integrate into Your Project**
    
    Integrate the CAPTCHA generation script into your web application by including `showCaptcha.php` in your form submission pages. To validate CAPTCHA inputs, compare the user's input with the value stored in the `$_SESSION['captcha']` variable.

## Customization

You can customize various aspects of the CAPTCHA generation, such as:

-   **CAPTCHA Length:** Modify the `$captcha_length` variable in `showCaptcha.php` to change the number of characters in the CAPTCHA.
-   **Fonts and Letter Styles:** Replace the provided TrueType fonts in the `fonts/` directory with your preferred fonts. Update the font path in `showCaptcha.php` accordingly.
-   **Image Dimensions:** Adjust the `$image_width` and `$image_height` variables to change the CAPTCHA image dimensions.

## Usage

1.  Include the CAPTCHA image in your HTML forms as described in the installation section.
    
2.  When a user submits the form, validate their input by comparing it with the code stored in `$_SESSION['captcha']`. 

For example:  
```shell
    if ($_POST['captcha'] == $_SESSION['captcha']) {
        // CAPTCHA code is correct, process the form.
    } else {
        // CAPTCHA code is incorrect, show an error message.
    }
```
    

## License

This project is licensed under the MIT License - see the [LICENSE](https://github.com/abhilash-malkar/GenerateCaptcha/blob/master/LICENSE) file for details.

## Acknowledgments

-   This project uses the GD library for image manipulation in PHP.

## Contributing

If you would like to contribute to this project or report issues, please create a GitHub issue or submit a pull request.

## Support and Contact

For any questions or support, you can reach out to [Abhilash Malkar](mailto:abhilash14m@gmail.com).
