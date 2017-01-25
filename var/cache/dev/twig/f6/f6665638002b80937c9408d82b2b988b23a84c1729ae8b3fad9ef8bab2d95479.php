<?php

/* index.html.twig */
class __TwigTemplate_383979a70bb9a7a420d3075e92a1b61bd4ff877740cced4c031372451a265e21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $_trait_0 = $this->loadTemplate("blocks.html.twig", "index.html.twig", 3);
        // line 3
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."blocks.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'javascripts' => array($this, 'block_javascripts'),
                'stylesheets' => array($this, 'block_stylesheets'),
                'body' => array($this, 'block_body'),
                'sidebar' => array($this, 'block_sidebar'),
                'questionaire' => array($this, 'block_questionaire'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b947a68628e5a7d11cf74f4f87677f00236e748f65e0c346b40eca253498cad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b947a68628e5a7d11cf74f4f87677f00236e748f65e0c346b40eca253498cad->enter($__internal_0b947a68628e5a7d11cf74f4f87677f00236e748f65e0c346b40eca253498cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_67a1e3d490a5525e113d34ae9b49ee99ce431b27070f7486433bcca76bede45b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a1e3d490a5525e113d34ae9b49ee99ce431b27070f7486433bcca76bede45b->enter($__internal_67a1e3d490a5525e113d34ae9b49ee99ce431b27070f7486433bcca76bede45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b947a68628e5a7d11cf74f4f87677f00236e748f65e0c346b40eca253498cad->leave($__internal_0b947a68628e5a7d11cf74f4f87677f00236e748f65e0c346b40eca253498cad_prof);

        
        $__internal_67a1e3d490a5525e113d34ae9b49ee99ce431b27070f7486433bcca76bede45b->leave($__internal_67a1e3d490a5525e113d34ae9b49ee99ce431b27070f7486433bcca76bede45b_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f1c9568bbc6f5475b12887a655d6705dae4985f992c8ca9d9d600d5a93f8745c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c9568bbc6f5475b12887a655d6705dae4985f992c8ca9d9d600d5a93f8745c->enter($__internal_f1c9568bbc6f5475b12887a655d6705dae4985f992c8ca9d9d600d5a93f8745c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f5172ce4cacc9f10f5382939b3c45e4f4f6fc5561121def929e16719adc17485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5172ce4cacc9f10f5382939b3c45e4f4f6fc5561121def929e16719adc17485->enter($__internal_f5172ce4cacc9f10f5382939b3c45e4f4f6fc5561121def929e16719adc17485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_f5172ce4cacc9f10f5382939b3c45e4f4f6fc5561121def929e16719adc17485->leave($__internal_f5172ce4cacc9f10f5382939b3c45e4f4f6fc5561121def929e16719adc17485_prof);

        
        $__internal_f1c9568bbc6f5475b12887a655d6705dae4985f992c8ca9d9d600d5a93f8745c->leave($__internal_f1c9568bbc6f5475b12887a655d6705dae4985f992c8ca9d9d600d5a93f8745c_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_356faad663cf56cab87ef35894cd063fb47b62fb7e0e618f861c54b98729d8cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356faad663cf56cab87ef35894cd063fb47b62fb7e0e618f861c54b98729d8cf->enter($__internal_356faad663cf56cab87ef35894cd063fb47b62fb7e0e618f861c54b98729d8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f3f8d71b3334af2a6ffee87428f06c9d2868df57e1ab8491e8e5609f542fe4fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3f8d71b3334af2a6ffee87428f06c9d2868df57e1ab8491e8e5609f542fe4fd->enter($__internal_f3f8d71b3334af2a6ffee87428f06c9d2868df57e1ab8491e8e5609f542fe4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_f3f8d71b3334af2a6ffee87428f06c9d2868df57e1ab8491e8e5609f542fe4fd->leave($__internal_f3f8d71b3334af2a6ffee87428f06c9d2868df57e1ab8491e8e5609f542fe4fd_prof);

        
        $__internal_356faad663cf56cab87ef35894cd063fb47b62fb7e0e618f861c54b98729d8cf->leave($__internal_356faad663cf56cab87ef35894cd063fb47b62fb7e0e618f861c54b98729d8cf_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6986cf5b21e316c226bbee89fcd2b4ce15e84f34b97c44e7ba47461f5f340a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6986cf5b21e316c226bbee89fcd2b4ce15e84f34b97c44e7ba47461f5f340a4->enter($__internal_e6986cf5b21e316c226bbee89fcd2b4ce15e84f34b97c44e7ba47461f5f340a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b2112e4a200b01a5b6d976a9cecfd48de63c89e12d738b9ec34d261c6f846893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2112e4a200b01a5b6d976a9cecfd48de63c89e12d738b9ec34d261c6f846893->enter($__internal_b2112e4a200b01a5b6d976a9cecfd48de63c89e12d738b9ec34d261c6f846893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <div class=\"row\">
    ";
        // line 15
        $this->displayBlock('sidebar', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('questionaire', $context, $blocks);
        // line 21
        echo "    </div>
";
        
        $__internal_b2112e4a200b01a5b6d976a9cecfd48de63c89e12d738b9ec34d261c6f846893->leave($__internal_b2112e4a200b01a5b6d976a9cecfd48de63c89e12d738b9ec34d261c6f846893_prof);

        
        $__internal_e6986cf5b21e316c226bbee89fcd2b4ce15e84f34b97c44e7ba47461f5f340a4->leave($__internal_e6986cf5b21e316c226bbee89fcd2b4ce15e84f34b97c44e7ba47461f5f340a4_prof);

    }

    // line 15
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6122f50955199ccee2ee3a4d7fa99634832a0b7e2431108bd5ffb61ee6172002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6122f50955199ccee2ee3a4d7fa99634832a0b7e2431108bd5ffb61ee6172002->enter($__internal_6122f50955199ccee2ee3a4d7fa99634832a0b7e2431108bd5ffb61ee6172002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_3bd009001a755c792a322694fedaea1616e1ae89b6b85447b98666d9d6826b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd009001a755c792a322694fedaea1616e1ae89b6b85447b98666d9d6826b7a->enter($__internal_3bd009001a755c792a322694fedaea1616e1ae89b6b85447b98666d9d6826b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 16
        echo "        ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
    ";
        
        $__internal_3bd009001a755c792a322694fedaea1616e1ae89b6b85447b98666d9d6826b7a->leave($__internal_3bd009001a755c792a322694fedaea1616e1ae89b6b85447b98666d9d6826b7a_prof);

        
        $__internal_6122f50955199ccee2ee3a4d7fa99634832a0b7e2431108bd5ffb61ee6172002->leave($__internal_6122f50955199ccee2ee3a4d7fa99634832a0b7e2431108bd5ffb61ee6172002_prof);

    }

    // line 18
    public function block_questionaire($context, array $blocks = array())
    {
        $__internal_15e8d18f83119473a58f91da7b2f67660b89490014014b6226705294d251691c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15e8d18f83119473a58f91da7b2f67660b89490014014b6226705294d251691c->enter($__internal_15e8d18f83119473a58f91da7b2f67660b89490014014b6226705294d251691c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "questionaire"));

        $__internal_64ef4692bae777611a7136dc0b30a864224507041c90611fea4467088635da83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64ef4692bae777611a7136dc0b30a864224507041c90611fea4467088635da83->enter($__internal_64ef4692bae777611a7136dc0b30a864224507041c90611fea4467088635da83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "questionaire"));

        // line 19
        echo "        ";
        $this->displayParentBlock("questionaire", $context, $blocks);
        echo "
    ";
        
        $__internal_64ef4692bae777611a7136dc0b30a864224507041c90611fea4467088635da83->leave($__internal_64ef4692bae777611a7136dc0b30a864224507041c90611fea4467088635da83_prof);

        
        $__internal_15e8d18f83119473a58f91da7b2f67660b89490014014b6226705294d251691c->leave($__internal_15e8d18f83119473a58f91da7b2f67660b89490014014b6226705294d251691c_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 19,  151 => 18,  138 => 16,  129 => 15,  118 => 21,  115 => 18,  113 => 15,  110 => 14,  101 => 13,  88 => 10,  79 => 9,  66 => 6,  57 => 5,  36 => 1,  14 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% use 'blocks.html.twig' %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
{% endblock %}

{% block body %}
    <div class=\"row\">
    {% block sidebar %}
        {{ parent() }}
    {% endblock %}
    {% block questionaire %}
        {{ parent() }}
    {% endblock %}
    </div>
{% endblock %}", "index.html.twig", "/Users/Ian/GitHub/CitSci/FinalProject/citsciProj/app/Resources/views/index.html.twig");
    }
}
