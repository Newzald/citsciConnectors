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
            'jumbo' => array($this, 'block_jumbo'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec031361142afd0b8706d48a7326bf5df7586e4183671b8b79266d48182b11f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec031361142afd0b8706d48a7326bf5df7586e4183671b8b79266d48182b11f1->enter($__internal_ec031361142afd0b8706d48a7326bf5df7586e4183671b8b79266d48182b11f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_830b7553d770ed45759a54ef01419a43700ff1e9824f92a878470e7c9927f5ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_830b7553d770ed45759a54ef01419a43700ff1e9824f92a878470e7c9927f5ea->enter($__internal_830b7553d770ed45759a54ef01419a43700ff1e9824f92a878470e7c9927f5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        ";
        // line 17
        $this->displayBlock('jumbo', $context, $blocks);
        // line 18
        echo "        <div class=\"container\">
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        </div>
        <nav class=\"navbar sticky-bottom navbar-light\">
            <div class=\"container\"></div>
        </nav>
        ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </body>
</html>
";
        
        $__internal_ec031361142afd0b8706d48a7326bf5df7586e4183671b8b79266d48182b11f1->leave($__internal_ec031361142afd0b8706d48a7326bf5df7586e4183671b8b79266d48182b11f1_prof);

        
        $__internal_830b7553d770ed45759a54ef01419a43700ff1e9824f92a878470e7c9927f5ea->leave($__internal_830b7553d770ed45759a54ef01419a43700ff1e9824f92a878470e7c9927f5ea_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee0bc92a2c44b6c75662fe64418c4b4fa39c92994edfff120595a3a619c682a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee0bc92a2c44b6c75662fe64418c4b4fa39c92994edfff120595a3a619c682a2->enter($__internal_ee0bc92a2c44b6c75662fe64418c4b4fa39c92994edfff120595a3a619c682a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_da3be2960d15c269c5a9d228763180438596cecde3f633e2ce1f2032ba45a642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da3be2960d15c269c5a9d228763180438596cecde3f633e2ce1f2032ba45a642->enter($__internal_da3be2960d15c269c5a9d228763180438596cecde3f633e2ce1f2032ba45a642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_da3be2960d15c269c5a9d228763180438596cecde3f633e2ce1f2032ba45a642->leave($__internal_da3be2960d15c269c5a9d228763180438596cecde3f633e2ce1f2032ba45a642_prof);

        
        $__internal_ee0bc92a2c44b6c75662fe64418c4b4fa39c92994edfff120595a3a619c682a2->leave($__internal_ee0bc92a2c44b6c75662fe64418c4b4fa39c92994edfff120595a3a619c682a2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0cde211499f5857b2f2d04ad27dd2a29c0d0f0049b5f140ef9f19e555e6847bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cde211499f5857b2f2d04ad27dd2a29c0d0f0049b5f140ef9f19e555e6847bf->enter($__internal_0cde211499f5857b2f2d04ad27dd2a29c0d0f0049b5f140ef9f19e555e6847bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a566e8f547e000def6c2e9c9098ecfa62b0176f04cd1273b47f6b269f5651343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a566e8f547e000def6c2e9c9098ecfa62b0176f04cd1273b47f6b269f5651343->enter($__internal_a566e8f547e000def6c2e9c9098ecfa62b0176f04cd1273b47f6b269f5651343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a566e8f547e000def6c2e9c9098ecfa62b0176f04cd1273b47f6b269f5651343->leave($__internal_a566e8f547e000def6c2e9c9098ecfa62b0176f04cd1273b47f6b269f5651343_prof);

        
        $__internal_0cde211499f5857b2f2d04ad27dd2a29c0d0f0049b5f140ef9f19e555e6847bf->leave($__internal_0cde211499f5857b2f2d04ad27dd2a29c0d0f0049b5f140ef9f19e555e6847bf_prof);

    }

    // line 17
    public function block_jumbo($context, array $blocks = array())
    {
        $__internal_da97373c524418f6114080ed265c01e495011a10d8418f7e4f02a78b55dd9e35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da97373c524418f6114080ed265c01e495011a10d8418f7e4f02a78b55dd9e35->enter($__internal_da97373c524418f6114080ed265c01e495011a10d8418f7e4f02a78b55dd9e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbo"));

        $__internal_2417f62734636ce843aa9f3b4cc2941356c720c26fc010d3b1d7c5f4effb8d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2417f62734636ce843aa9f3b4cc2941356c720c26fc010d3b1d7c5f4effb8d80->enter($__internal_2417f62734636ce843aa9f3b4cc2941356c720c26fc010d3b1d7c5f4effb8d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbo"));

        
        $__internal_2417f62734636ce843aa9f3b4cc2941356c720c26fc010d3b1d7c5f4effb8d80->leave($__internal_2417f62734636ce843aa9f3b4cc2941356c720c26fc010d3b1d7c5f4effb8d80_prof);

        
        $__internal_da97373c524418f6114080ed265c01e495011a10d8418f7e4f02a78b55dd9e35->leave($__internal_da97373c524418f6114080ed265c01e495011a10d8418f7e4f02a78b55dd9e35_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e6d2cb52bb6c34d145b86826bde77e008c9f14121bc26cca7e611a9fe00683e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e6d2cb52bb6c34d145b86826bde77e008c9f14121bc26cca7e611a9fe00683e->enter($__internal_6e6d2cb52bb6c34d145b86826bde77e008c9f14121bc26cca7e611a9fe00683e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eeebb3ee3e68abd21b4f7bb7b4252771d776c35d25d7fcf04b8874fbb0bbcf93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeebb3ee3e68abd21b4f7bb7b4252771d776c35d25d7fcf04b8874fbb0bbcf93->enter($__internal_eeebb3ee3e68abd21b4f7bb7b4252771d776c35d25d7fcf04b8874fbb0bbcf93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eeebb3ee3e68abd21b4f7bb7b4252771d776c35d25d7fcf04b8874fbb0bbcf93->leave($__internal_eeebb3ee3e68abd21b4f7bb7b4252771d776c35d25d7fcf04b8874fbb0bbcf93_prof);

        
        $__internal_6e6d2cb52bb6c34d145b86826bde77e008c9f14121bc26cca7e611a9fe00683e->leave($__internal_6e6d2cb52bb6c34d145b86826bde77e008c9f14121bc26cca7e611a9fe00683e_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_130731810a42285d8ab9ee64fecc59af7f1f16f39018956639621ca9ef1a9014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_130731810a42285d8ab9ee64fecc59af7f1f16f39018956639621ca9ef1a9014->enter($__internal_130731810a42285d8ab9ee64fecc59af7f1f16f39018956639621ca9ef1a9014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_08622ace02546aacc475ca32dbb40bd8b2ceb26ab1cb3c9b0e8287bf98e5e71a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08622ace02546aacc475ca32dbb40bd8b2ceb26ab1cb3c9b0e8287bf98e5e71a->enter($__internal_08622ace02546aacc475ca32dbb40bd8b2ceb26ab1cb3c9b0e8287bf98e5e71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_08622ace02546aacc475ca32dbb40bd8b2ceb26ab1cb3c9b0e8287bf98e5e71a->leave($__internal_08622ace02546aacc475ca32dbb40bd8b2ceb26ab1cb3c9b0e8287bf98e5e71a_prof);

        
        $__internal_130731810a42285d8ab9ee64fecc59af7f1f16f39018956639621ca9ef1a9014->leave($__internal_130731810a42285d8ab9ee64fecc59af7f1f16f39018956639621ca9ef1a9014_prof);

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
        return array (  152 => 24,  135 => 19,  118 => 17,  101 => 6,  83 => 5,  71 => 25,  69 => 24,  63 => 20,  61 => 19,  58 => 18,  56 => 17,  42 => 7,  40 => 6,  36 => 5,  30 => 1,);
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
        {% block jumbo %}{% endblock %}
        <div class=\"container\">
        {% block body %}{% endblock %}
        </div>
        <nav class=\"navbar sticky-bottom navbar-light\">
            <div class=\"container\"></div>
        </nav>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/Ian/GitHub/citsciConnectors/app/Resources/views/base.html.twig");
    }
}
