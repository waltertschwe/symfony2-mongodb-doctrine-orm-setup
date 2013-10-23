<?php

/* StoryAdminBundle:Story:story.nav.html.twig */
class __TwigTemplate_a297579663fdcd70372c40f81cc91e73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"/symfony/web/app_dev.php/story-admin\">Story Tool</a>
        </div>
        <div class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"dropdown\">
            <a href=\"#\"
            \tclass=\"dropdown-toggle\"
            \tdata-toggle=\"dropdown\">Stories<b class=\"caret\"></b>
            </a>
\t            <ul class=\"dropdown-menu\">
\t            \t<li><a href=\"create\">Create Story</a></li>
\t            </ul>
           \t</li>
            <li><a href=\"\">Authors</a></li>
            <li><a href=\"\">Badges</a></li>
            <li><a href=\"\">Admin Tools</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</div>";
    }

    public function getTemplateName()
    {
        return "StoryAdminBundle:Story:story.nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
