<?php

/* layout.html */
class __TwigTemplate_6b2b10d4d26891baaddc52a5afc90c84ddc879ec7196dce7b09e2ec7133597e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head lang=\"cn\">
    <meta charset=\"UTF-8\">
    ";
        // line 5
        $this->displayBlock('header', $context, $blocks);
        // line 8
        echo "    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"renderer\" content=\"webkit\">
    <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\"/>
</head>
<body>

";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        echo "    <title>";
        echo twig_escape_filter($this->env, (isset($context["templatename"]) ? $context["templatename"] : null), "html", null, true);
        echo "</title>
    ";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "<!-- content here -->
";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  57 => 15,  50 => 6,  47 => 5,  40 => 18,  38 => 15,  29 => 8,  27 => 5,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head lang=\"cn\">
    <meta charset=\"UTF-8\">
    {% block header %}
    <title>{{ templatename }}</title>
    {% endblock%}
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta name=\"renderer\" content=\"webkit\">
    <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\"/>
</head>
<body>

{% block content %}
<!-- content here -->
{% endblock %}

</body>
</html>
", "layout.html", "E:\\website\\flyphp\\app\\views\\layout.html");
    }
}
