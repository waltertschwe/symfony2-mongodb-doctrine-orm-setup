<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_91abbe73e27ef2a05f8f96c35e1d835b extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  389 => 160,  386 => 159,  380 => 158,  378 => 157,  371 => 156,  367 => 155,  363 => 153,  361 => 152,  358 => 151,  353 => 149,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  321 => 135,  315 => 131,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  288 => 118,  281 => 114,  276 => 111,  274 => 110,  265 => 105,  259 => 103,  255 => 101,  253 => 100,  248 => 97,  232 => 88,  222 => 83,  216 => 79,  213 => 78,  210 => 77,  197 => 69,  194 => 68,  191 => 67,  184 => 63,  178 => 59,  175 => 58,  172 => 57,  170 => 56,  155 => 47,  152 => 46,  134 => 39,  70 => 15,  58 => 17,  127 => 35,  110 => 22,  90 => 20,  84 => 29,  53 => 11,  165 => 4,  137 => 56,  129 => 54,  81 => 30,  20 => 1,  76 => 17,  114 => 37,  97 => 41,  65 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 150,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 115,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 12,  273 => 96,  269 => 107,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 89,  230 => 82,  227 => 86,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 76,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 62,  119 => 42,  102 => 24,  71 => 26,  67 => 14,  63 => 19,  59 => 13,  28 => 3,  87 => 25,  38 => 6,  31 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 54,  163 => 53,  158 => 79,  156 => 66,  151 => 63,  142 => 59,  138 => 43,  136 => 56,  121 => 52,  117 => 19,  105 => 25,  91 => 27,  62 => 17,  49 => 13,  26 => 9,  21 => 2,  25 => 35,  94 => 21,  89 => 20,  85 => 32,  75 => 17,  68 => 14,  56 => 11,  24 => 2,  19 => 1,  93 => 28,  88 => 31,  78 => 26,  46 => 8,  44 => 8,  27 => 8,  79 => 18,  72 => 16,  69 => 25,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 96,  157 => 56,  145 => 46,  139 => 63,  131 => 61,  123 => 59,  120 => 31,  115 => 43,  111 => 37,  108 => 19,  101 => 43,  98 => 45,  96 => 31,  83 => 25,  74 => 27,  66 => 15,  55 => 9,  52 => 14,  50 => 10,  43 => 11,  41 => 10,  35 => 5,  32 => 12,  29 => 3,  209 => 82,  203 => 73,  199 => 67,  193 => 73,  189 => 66,  187 => 84,  182 => 66,  176 => 64,  173 => 6,  168 => 5,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 43,  144 => 42,  141 => 48,  133 => 55,  130 => 41,  125 => 53,  122 => 43,  116 => 50,  112 => 49,  109 => 27,  106 => 45,  103 => 32,  99 => 23,  95 => 28,  92 => 21,  86 => 30,  82 => 19,  80 => 30,  73 => 16,  64 => 13,  60 => 6,  57 => 12,  54 => 10,  51 => 10,  48 => 9,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
