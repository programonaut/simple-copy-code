# Simple Copy Code
A simple Wordpress Plugin that allows you to copy the content of code blocks with the click of a button!

Installing the plugin will add a copy button to the top right of your code fields. The result will look like this:

![image](https://user-images.githubusercontent.com/47224024/183262668-4817d697-05fb-4f7d-bbb9-e2f0163f3526.png)

In combination with some other plugins like [Code Syntax Block](https://github.com/mkaz/code-syntax-block) and some custom styling as described in the "Customization" section the end result could look something like this:

![image](https://user-images.githubusercontent.com/47224024/183262747-141a61bd-13a9-4a0f-ac4d-41fd0c82d97f.png)


## Installation (GitHub - ZIP)

To install this plugin download it as a zip from this repository:
![image](https://user-images.githubusercontent.com/47224024/183262579-14227b62-ed1d-4df1-af4a-80caa17ce283.png)
And then upload it in the plugin tab of your WordPress installation:
![image](https://user-images.githubusercontent.com/47224024/183262608-0b97261e-a7c9-49f9-9604-feaa606744ef.png)
Lastly activate the plugin.

## Installation (GitHub - Clone)

To install this plugin clone it into the /wp-content/plugins directory and activate it in plugins tab of your WordPress installation.

## Customization
In case you need a different styling you can do so by adding styles to the classes `.copy-container` and `.copy-button`. They are integrated in the following HTML structure:

``` html
<div class="copy-container">
  <button class="copy-button">Copy</button>
  <!-- block content -->
</div>
```
For any questions feel free to reach out to [mail@programonaut.com](mailto:mail@programonaut.com).
