# Notepad++ Pixar USD Syntax Highlighter  #
**Version 0.1** Released Dec 13, 2013   
by Andrew Hazelden

![Sample PIXAR USD file](screenshots/ascii-usd-screenshot.png)

## Overview ##

This is a proof of concept Notepad++ syntax highlighting module for the code from [Pixar's USD format](http://graphics.pixar.com/usd/). The new module makes it easier for a VFX artist or technical director to edit a .usd file.

**Note:** The free program Notepad++ is required to use the syntax highlighter.

## Download ##

The Pixar USD Syntax Highlighter module is a free download.

You can download the latest version on GitHub here:   
[https://github.com/AndrewHazelden/PIXAR-USD-Syntax-Highlighter/](https://github.com/AndrewHazelden/PIXAR-USD-Syntax-Highlighter/)

## Installation ##

**Step 1.**  [Download Notepad++](http://notepad-plus-plus.org/download/v6.4.5.html) and install it on your system. After you start Notepad++ you will see a blank text editing window.

![Starting up Notepad++](screenshots/1_notepad++_UI_start.png)

**Step 2.**  The syntax highlighting module has been customized to work with the dark background based **Obsidian** theme. To load the Obsidian theme in Notepad++, go to the **Settings** menu and select **"Style Configurator..."**

![Open the Style Configurator](screenshots/2_style_configurator.png)

In the Style Configurator window select the **Obsidian** theme and click the **Save and Close** button. 

![Choose the Obsidian Theme](screenshots/3_style_configurator_obsidian.png)

**Step 3.** Let's load the custom "Pixar USD" syntax highlighting module. Open the **Language** menu in Notepad++ and select the **"Define your language..."** menu item. The **User Defined Language** window will load.

![Load the Define Your Language Window](screenshots/4_define_your_language.png)


**Step 4.** In the **User Defined Language** window, click on the **Import** button to load the XML based language file.

![Click the "Import" button](screenshots/5_import_a_language.png)

In the open dialog select the **"userDefined_PIXAR_USD.xml"** file and click **open**.

![Select the userDefined_PIXAR_USD.xml file ](screenshots/6_select_the_language_file.png)

If the file was loaded correctly an "Import Successful" notice will appear.  Click the **OK** button to continue. At this point you should close the "User Defined Language" window by clicking on the window's **X** shaped close button.

![You will see a "Import Successful" notice](screenshots/7_import_success.png)

**Step 5.**  We need to restart Notepad++ for the new language module to be listed in the Notepad++ language menu.

![This is an unformatted script](screenshots/8_unstyled_text.png)

If you open a Pixar Universal Scene Description .usd file at this point you will see formatted text. If you are working on a file without the .usd extension you can select the language manually.

Open the **Language** menu and select **PIXAR USD**. This will turn on syntax highlighting and make it easier to develop complex Universal Scene Description (.usd) files.
 
![Select the PIXAR USD Language](screenshots/9_select_the_language.png)


Here is an example Universal Scene Description .usd file with Notepad++ based syntax highlighting enabled:

![This is a sample show script that has syntax highlighting](screenshots/10_highlighted_pixar_usd.png)

* * *

I hope this tool improves your coding workflow as you explore the new PIXAR USD format using the Notepad++ text editor.

Cheers,  

Andrew Hazelden

Email: [andrew@andrewhazelden.com](mailto:andrew@andrewhazelden.com)   
Blog: [http://www.andrewhazelden.com](http://www.andrewhazelden.com)  
Twitter: [@andrewhazelden](https://twitter.com/andrewhazelden)  
Google+: [https://plus.google.com/+AndrewHazelden](https://plus.google.com/+AndrewHazelden)



