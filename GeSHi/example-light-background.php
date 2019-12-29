<?php
//
// Include the GeSHi library
//
include_once 'geshi.php';
 
//
// Define some source to highlight, a language to use
// and the path to the language files
//
 
$source = '#usda 1.0

def Xform "World"
{
  def Xform "anim" (kind = "group")
  {
    def Xform "chars" (kind = "group")
    {
      def "Luxo" (
        kind = "char"
        add references = [@chars/Luxo.usd@</Luxo>]
      )
      {
        Transform transform.timeSamples = {
          19: ((-0.75, 0.65, 0), (-0.64, -0.75, -0.12, 0), (-0.08, -0.09, 0.99, 0), (-381.7, -252.3, 337.6, 1)),
          20: ((-0.75, 0.65, 0), (-0.64, -0.75, -0.12, 0), (-0.08, -0.1, 1, 0), (-381.7, -252.3, 337.6, 1))
        }
        over "geom"
        {
          over "Body"
          {
            PointFloat[] points.timeSamples = {
              19: [(64.8254, -37.7543, 90.7112), (64.9756, -37.8067, 89.8514), ...]
              20: [(64.8327, -37.7363, 90.739), (64.9843, -37.788, 89.8794), ... ]
            }
          }
        }
      }
    }
  }
}
';

$language = 'usd';

//
// Create a GeSHi object
//

define("IN_PHPBB", "Yes");

$geshi = new GeSHi($source, $language);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>USD GeSHi Syntax Highlighter Example</title>
<style type="text/css">
</style>
</head>
<body>

<?php
//
// And echo the result!
//
echo $geshi->parse_code();
?>

</body>
</html>
