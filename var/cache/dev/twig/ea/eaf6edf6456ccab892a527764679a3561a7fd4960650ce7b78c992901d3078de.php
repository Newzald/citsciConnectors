<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_dd909c747434b4b23bb77dfa24ae8c39cb2a68f375fbcbb52d5977072b82312d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f34ba8526749d9b96f7c75bab3e507f6b7bb7c0a6c9bbbd1571ff0826b618b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f34ba8526749d9b96f7c75bab3e507f6b7bb7c0a6c9bbbd1571ff0826b618b5->enter($__internal_2f34ba8526749d9b96f7c75bab3e507f6b7bb7c0a6c9bbbd1571ff0826b618b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6f05cfd879ab731fe8a544ae0cf5669e343065ba3210267d8b41801e8b8c9d5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f05cfd879ab731fe8a544ae0cf5669e343065ba3210267d8b41801e8b8c9d5a->enter($__internal_6f05cfd879ab731fe8a544ae0cf5669e343065ba3210267d8b41801e8b8c9d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f34ba8526749d9b96f7c75bab3e507f6b7bb7c0a6c9bbbd1571ff0826b618b5->leave($__internal_2f34ba8526749d9b96f7c75bab3e507f6b7bb7c0a6c9bbbd1571ff0826b618b5_prof);

        
        $__internal_6f05cfd879ab731fe8a544ae0cf5669e343065ba3210267d8b41801e8b8c9d5a->leave($__internal_6f05cfd879ab731fe8a544ae0cf5669e343065ba3210267d8b41801e8b8c9d5a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_194b039243d3b3ee3fbb68111c91b83632d5910545e584a4d1958210716e69e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_194b039243d3b3ee3fbb68111c91b83632d5910545e584a4d1958210716e69e6->enter($__internal_194b039243d3b3ee3fbb68111c91b83632d5910545e584a4d1958210716e69e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cb7f6f4a7e6e13041dab99b61be6f69d0ec7aeb609196699bb9c75a656a9e0ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb7f6f4a7e6e13041dab99b61be6f69d0ec7aeb609196699bb9c75a656a9e0ff->enter($__internal_cb7f6f4a7e6e13041dab99b61be6f69d0ec7aeb609196699bb9c75a656a9e0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
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
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
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
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
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
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
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
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_cb7f6f4a7e6e13041dab99b61be6f69d0ec7aeb609196699bb9c75a656a9e0ff->leave($__internal_cb7f6f4a7e6e13041dab99b61be6f69d0ec7aeb609196699bb9c75a656a9e0ff_prof);

        
        $__internal_194b039243d3b3ee3fbb68111c91b83632d5910545e584a4d1958210716e69e6->leave($__internal_194b039243d3b3ee3fbb68111c91b83632d5910545e584a4d1958210716e69e6_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b0814444eb20932e322949112c84959936697796d147c525d2c014f27a4a0e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b0814444eb20932e322949112c84959936697796d147c525d2c014f27a4a0e1->enter($__internal_3b0814444eb20932e322949112c84959936697796d147c525d2c014f27a4a0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cf5bcec528c850f62e5acd74af6cc6f4e2f244a0a2cf0353c493312390f53410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5bcec528c850f62e5acd74af6cc6f4e2f244a0a2cf0353c493312390f53410->enter($__internal_cf5bcec528c850f62e5acd74af6cc6f4e2f244a0a2cf0353c493312390f53410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cf5bcec528c850f62e5acd74af6cc6f4e2f244a0a2cf0353c493312390f53410->leave($__internal_cf5bcec528c850f62e5acd74af6cc6f4e2f244a0a2cf0353c493312390f53410_prof);

        
        $__internal_3b0814444eb20932e322949112c84959936697796d147c525d2c014f27a4a0e1->leave($__internal_3b0814444eb20932e322949112c84959936697796d147c525d2c014f27a4a0e1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_327b3ded0093a2f04a456419a4d44fb46a8759b807f2905d662bd77db9ea9bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_327b3ded0093a2f04a456419a4d44fb46a8759b807f2905d662bd77db9ea9bbf->enter($__internal_327b3ded0093a2f04a456419a4d44fb46a8759b807f2905d662bd77db9ea9bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2e4006c9d4f6d2baa0d1e4236c2fd865483c11f07666790c50469627c5f60d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e4006c9d4f6d2baa0d1e4236c2fd865483c11f07666790c50469627c5f60d5->enter($__internal_e2e4006c9d4f6d2baa0d1e4236c2fd865483c11f07666790c50469627c5f60d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e2e4006c9d4f6d2baa0d1e4236c2fd865483c11f07666790c50469627c5f60d5->leave($__internal_e2e4006c9d4f6d2baa0d1e4236c2fd865483c11f07666790c50469627c5f60d5_prof);

        
        $__internal_327b3ded0093a2f04a456419a4d44fb46a8759b807f2905d662bd77db9ea9bbf->leave($__internal_327b3ded0093a2f04a456419a4d44fb46a8759b807f2905d662bd77db9ea9bbf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
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
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
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
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
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
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
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
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/Ian/GitHub/CitSci/FinalProject/citsciProj/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
