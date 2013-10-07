<?php

/* StoryAdminBundle:Story:story.update.html.twig */
class __TwigTemplate_170b6cdcac9d7989109aaea180748ad2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>  
      <meta charset=\"utf-8\">
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "      ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bff46d8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bff46d8_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bff46d8_jquery_1.js");
            // line 11
            echo "       <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        } else {
            // asset "bff46d8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bff46d8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bff46d8.js");
            echo "       <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        }
        unset($context["asset_url"]);
        // line 13
        echo "\t\t<script src=\"/symfony/web/js/ckeditor/ckeditor.js\"></script>
\t\t
</head>
<body>
";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "    <div class=\"flash-notice\">
       <font color=\"red\"> ";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo " </font>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "<h2>Story Update</h2>
<a href=\"/symfony/web/app_dev.php/story-admin\">
<img src=\"/symfony/web/bundles/storyadmin/images/back-icon.png\" />
</a>
";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "storyName"), 'row');
        echo " 
\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author"), 'row');
        echo "<br/>
\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'row');
        echo " 
\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\t\tCKEDITOR.replace( 'storyName_description', {
\t\t\t\tuiColor: '#1C6BA0'
\t\t\t});
\t\t</script>
\t<br/>
";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


</body>
</html>";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/css/ckeditor.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
      ";
    }

    public function getTemplateName()
    {
        return "StoryAdminBundle:Story:story.update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 6,  110 => 5,  101 => 37,  91 => 30,  87 => 29,  83 => 28,  79 => 27,  75 => 26,  69 => 22,  60 => 19,  57 => 18,  53 => 17,  47 => 13,  33 => 11,  28 => 8,  26 => 5,  20 => 1,);
    }
}
