<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_67c5fb8b402a0432c64400dc79f563138dbee8a9408c47ac39b373b5fc6a9cd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b75138256e96452a4e43162c0d106c67958195744e7dbc3a08995332a7ad6b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b75138256e96452a4e43162c0d106c67958195744e7dbc3a08995332a7ad6b9->enter($__internal_2b75138256e96452a4e43162c0d106c67958195744e7dbc3a08995332a7ad6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_69fd0620a082f90d33e1946289666750072ac5b5bbab18d44286236d91ae5693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69fd0620a082f90d33e1946289666750072ac5b5bbab18d44286236d91ae5693->enter($__internal_69fd0620a082f90d33e1946289666750072ac5b5bbab18d44286236d91ae5693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b75138256e96452a4e43162c0d106c67958195744e7dbc3a08995332a7ad6b9->leave($__internal_2b75138256e96452a4e43162c0d106c67958195744e7dbc3a08995332a7ad6b9_prof);

        
        $__internal_69fd0620a082f90d33e1946289666750072ac5b5bbab18d44286236d91ae5693->leave($__internal_69fd0620a082f90d33e1946289666750072ac5b5bbab18d44286236d91ae5693_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7a3e0ae3576b2f8415a5869ef9220e8e787b6856d6cf6066b35404afa030ca5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a3e0ae3576b2f8415a5869ef9220e8e787b6856d6cf6066b35404afa030ca5d->enter($__internal_7a3e0ae3576b2f8415a5869ef9220e8e787b6856d6cf6066b35404afa030ca5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b67f1b0e0b4eaa2fc86e7f5844a38dd9f94c569fb41f768db73009321ea18165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b67f1b0e0b4eaa2fc86e7f5844a38dd9f94c569fb41f768db73009321ea18165->enter($__internal_b67f1b0e0b4eaa2fc86e7f5844a38dd9f94c569fb41f768db73009321ea18165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b67f1b0e0b4eaa2fc86e7f5844a38dd9f94c569fb41f768db73009321ea18165->leave($__internal_b67f1b0e0b4eaa2fc86e7f5844a38dd9f94c569fb41f768db73009321ea18165_prof);

        
        $__internal_7a3e0ae3576b2f8415a5869ef9220e8e787b6856d6cf6066b35404afa030ca5d->leave($__internal_7a3e0ae3576b2f8415a5869ef9220e8e787b6856d6cf6066b35404afa030ca5d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2c1e05f2f5aa6acf3dc6063577c2cb448874c76181660675d71786d0e466a565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c1e05f2f5aa6acf3dc6063577c2cb448874c76181660675d71786d0e466a565->enter($__internal_2c1e05f2f5aa6acf3dc6063577c2cb448874c76181660675d71786d0e466a565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_95669abe564a797fd8e996227807e33a5daef52806bbade7df75ad38ae1cf1eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95669abe564a797fd8e996227807e33a5daef52806bbade7df75ad38ae1cf1eb->enter($__internal_95669abe564a797fd8e996227807e33a5daef52806bbade7df75ad38ae1cf1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_95669abe564a797fd8e996227807e33a5daef52806bbade7df75ad38ae1cf1eb->leave($__internal_95669abe564a797fd8e996227807e33a5daef52806bbade7df75ad38ae1cf1eb_prof);

        
        $__internal_2c1e05f2f5aa6acf3dc6063577c2cb448874c76181660675d71786d0e466a565->leave($__internal_2c1e05f2f5aa6acf3dc6063577c2cb448874c76181660675d71786d0e466a565_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_75d7c9d7b75f89abff045ad28ec2046bf4cf510e758d76edee6db7246910afae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75d7c9d7b75f89abff045ad28ec2046bf4cf510e758d76edee6db7246910afae->enter($__internal_75d7c9d7b75f89abff045ad28ec2046bf4cf510e758d76edee6db7246910afae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_11329e8e59940b95777f75144020ab58c39fe0a5910b8c386df2a19edc094476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11329e8e59940b95777f75144020ab58c39fe0a5910b8c386df2a19edc094476->enter($__internal_11329e8e59940b95777f75144020ab58c39fe0a5910b8c386df2a19edc094476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_11329e8e59940b95777f75144020ab58c39fe0a5910b8c386df2a19edc094476->leave($__internal_11329e8e59940b95777f75144020ab58c39fe0a5910b8c386df2a19edc094476_prof);

        
        $__internal_75d7c9d7b75f89abff045ad28ec2046bf4cf510e758d76edee6db7246910afae->leave($__internal_75d7c9d7b75f89abff045ad28ec2046bf4cf510e758d76edee6db7246910afae_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/Ian/GitHub/CitSci/FinalProject/citsciProj/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
