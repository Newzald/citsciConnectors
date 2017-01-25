<?php

/* base.html.twig */
class __TwigTemplate_c6b56aef91f99a389e1a6f47f71cf0ca91dfaf9399112057d815c56c69b075fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bf9dfc10f17bf0d720efbb1dd899571d459656f67c33432a3384e9a01c2a826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf9dfc10f17bf0d720efbb1dd899571d459656f67c33432a3384e9a01c2a826->enter($__internal_3bf9dfc10f17bf0d720efbb1dd899571d459656f67c33432a3384e9a01c2a826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_536f5757a5fe388e8b0ea1b7a1c23eccb343bc6a9df3ad606b9c247636d4f2aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_536f5757a5fe388e8b0ea1b7a1c23eccb343bc6a9df3ad606b9c247636d4f2aa->enter($__internal_536f5757a5fe388e8b0ea1b7a1c23eccb343bc6a9df3ad606b9c247636d4f2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <nav class=\"navbar sticky-top navbar-light\">
            <div class=\"container\">
                <div class=\"navbar-brand\">
                    <img src=\"/graphics/icosahedron.svg\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\" alt=\"\">
                    Epidemic Connections</div>
            </div>
        </nav>
        <div class=\"jumbotron jumbotron-fluid\" style=\"background-color: rgb(209, 18, 66); color:white;\">
            <div class=\"container\">
                <h1 class=\"display-3\">Are you a connector?</h1>
                <p class=\"lead\">Connectors are the rare people who have incredibly widespread \"social networks.\" They are often successful businessmen or politicians, and play an integral role in the spread of ideas. With their wide reaching group of friends and acquaintances, connectors can spread a message rapidly to a receptive audience.</p>
            </div>
        </div>
        <div class=\"container\">
        ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "        </div>
        <nav class=\"navbar sticky-bottom navbar-light\">
            <div class=\"container\"></div>
        </nav>
        ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    </body>
</html>
";
        
        $__internal_3bf9dfc10f17bf0d720efbb1dd899571d459656f67c33432a3384e9a01c2a826->leave($__internal_3bf9dfc10f17bf0d720efbb1dd899571d459656f67c33432a3384e9a01c2a826_prof);

        
        $__internal_536f5757a5fe388e8b0ea1b7a1c23eccb343bc6a9df3ad606b9c247636d4f2aa->leave($__internal_536f5757a5fe388e8b0ea1b7a1c23eccb343bc6a9df3ad606b9c247636d4f2aa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_21077ca0afecdb7839bfdd094e91bc63ffcd98015d218235f118fbe519e1c171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21077ca0afecdb7839bfdd094e91bc63ffcd98015d218235f118fbe519e1c171->enter($__internal_21077ca0afecdb7839bfdd094e91bc63ffcd98015d218235f118fbe519e1c171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_78cc36aa218a578021cb8d96ec7e1842afd7afe6d196b28a9a1397e3405034bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78cc36aa218a578021cb8d96ec7e1842afd7afe6d196b28a9a1397e3405034bb->enter($__internal_78cc36aa218a578021cb8d96ec7e1842afd7afe6d196b28a9a1397e3405034bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_78cc36aa218a578021cb8d96ec7e1842afd7afe6d196b28a9a1397e3405034bb->leave($__internal_78cc36aa218a578021cb8d96ec7e1842afd7afe6d196b28a9a1397e3405034bb_prof);

        
        $__internal_21077ca0afecdb7839bfdd094e91bc63ffcd98015d218235f118fbe519e1c171->leave($__internal_21077ca0afecdb7839bfdd094e91bc63ffcd98015d218235f118fbe519e1c171_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8edb19c3acef61237f8793b60e26fb59ac3e3f1627603b903df9e11954abebc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8edb19c3acef61237f8793b60e26fb59ac3e3f1627603b903df9e11954abebc0->enter($__internal_8edb19c3acef61237f8793b60e26fb59ac3e3f1627603b903df9e11954abebc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_55208783a61bd287d30cbde3e0f9002b69f4a6864e4b19fe09963f67574e26ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55208783a61bd287d30cbde3e0f9002b69f4a6864e4b19fe09963f67574e26ce->enter($__internal_55208783a61bd287d30cbde3e0f9002b69f4a6864e4b19fe09963f67574e26ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_55208783a61bd287d30cbde3e0f9002b69f4a6864e4b19fe09963f67574e26ce->leave($__internal_55208783a61bd287d30cbde3e0f9002b69f4a6864e4b19fe09963f67574e26ce_prof);

        
        $__internal_8edb19c3acef61237f8793b60e26fb59ac3e3f1627603b903df9e11954abebc0->leave($__internal_8edb19c3acef61237f8793b60e26fb59ac3e3f1627603b903df9e11954abebc0_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_8aa0974075e4c4f692a37be71e6e93d96ffe9e449162e3b2e148bcd4dadedae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa0974075e4c4f692a37be71e6e93d96ffe9e449162e3b2e148bcd4dadedae5->enter($__internal_8aa0974075e4c4f692a37be71e6e93d96ffe9e449162e3b2e148bcd4dadedae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3801755b62d04de810535918a7bc211ff2eeff0ab53a7801fb641e1edce711c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3801755b62d04de810535918a7bc211ff2eeff0ab53a7801fb641e1edce711c4->enter($__internal_3801755b62d04de810535918a7bc211ff2eeff0ab53a7801fb641e1edce711c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3801755b62d04de810535918a7bc211ff2eeff0ab53a7801fb641e1edce711c4->leave($__internal_3801755b62d04de810535918a7bc211ff2eeff0ab53a7801fb641e1edce711c4_prof);

        
        $__internal_8aa0974075e4c4f692a37be71e6e93d96ffe9e449162e3b2e148bcd4dadedae5->leave($__internal_8aa0974075e4c4f692a37be71e6e93d96ffe9e449162e3b2e148bcd4dadedae5_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f1210932b85e79f9b735df571e6cf792af4ddfdeaa030629ee55a9c486be12ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1210932b85e79f9b735df571e6cf792af4ddfdeaa030629ee55a9c486be12ba->enter($__internal_f1210932b85e79f9b735df571e6cf792af4ddfdeaa030629ee55a9c486be12ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3abcc5bd179d1a8b953077565265ab4cb86832dabf32a70eb6b876affaa76df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3abcc5bd179d1a8b953077565265ab4cb86832dabf32a70eb6b876affaa76df0->enter($__internal_3abcc5bd179d1a8b953077565265ab4cb86832dabf32a70eb6b876affaa76df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3abcc5bd179d1a8b953077565265ab4cb86832dabf32a70eb6b876affaa76df0->leave($__internal_3abcc5bd179d1a8b953077565265ab4cb86832dabf32a70eb6b876affaa76df0_prof);

        
        $__internal_f1210932b85e79f9b735df571e6cf792af4ddfdeaa030629ee55a9c486be12ba->leave($__internal_f1210932b85e79f9b735df571e6cf792af4ddfdeaa030629ee55a9c486be12ba_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 29,  119 => 24,  102 => 6,  84 => 5,  72 => 30,  70 => 29,  64 => 25,  62 => 24,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <nav class=\"navbar sticky-top navbar-light\">
            <div class=\"container\">
                <div class=\"navbar-brand\">
                    <img src=\"/graphics/icosahedron.svg\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\" alt=\"\">
                    Epidemic Connections</div>
            </div>
        </nav>
        <div class=\"jumbotron jumbotron-fluid\" style=\"background-color: rgb(209, 18, 66); color:white;\">
            <div class=\"container\">
                <h1 class=\"display-3\">Are you a connector?</h1>
                <p class=\"lead\">Connectors are the rare people who have incredibly widespread \"social networks.\" They are often successful businessmen or politicians, and play an integral role in the spread of ideas. With their wide reaching group of friends and acquaintances, connectors can spread a message rapidly to a receptive audience.</p>
            </div>
        </div>
        <div class=\"container\">
        {% block body %}{% endblock %}
        </div>
        <nav class=\"navbar sticky-bottom navbar-light\">
            <div class=\"container\"></div>
        </nav>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/Ian/GitHub/CitSci/FinalProject/citsciProj/app/Resources/views/base.html.twig");
    }
}
