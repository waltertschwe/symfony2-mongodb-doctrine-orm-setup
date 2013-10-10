<?php

/* StoryAdminBundle:Story:header/story.header-editor.html.twig */
class __TwigTemplate_b7a22d362eac110dccd15b87ab5ae70c extends Twig_Template
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
        echo " <meta charset=\"utf-8\">
 ";
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo " ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bff46d8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bff46d8_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bff46d8_jquery_1.js");
            // line 10
            echo " <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "bff46d8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bff46d8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bff46d8.js");
            echo " <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 12
        echo "
<script src=\"/symfony/web/js/ckeditor/ckeditor.js\"></script>";
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo " \t  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
      <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/css/custom-template.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
      <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/css/ckeditor.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
 ";
    }

    public function getTemplateName()
    {
        return "StoryAdminBundle:Story:header/story.header-editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 5,  57 => 4,  52 => 3,  49 => 2,  44 => 12,  30 => 10,  25 => 7,  23 => 2,  20 => 1,);
    }
}
