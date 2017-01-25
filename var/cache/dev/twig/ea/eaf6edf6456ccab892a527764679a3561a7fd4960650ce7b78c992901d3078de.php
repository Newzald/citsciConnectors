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
        $__internal_dba5dcc30cd778f40960da6eeaeb56648cd84504c657dbde330bf3ea148a990d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dba5dcc30cd778f40960da6eeaeb56648cd84504c657dbde330bf3ea148a990d->enter($__internal_dba5dcc30cd778f40960da6eeaeb56648cd84504c657dbde330bf3ea148a990d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1e3fa928efebf2839a155fb1a6b1934dd4d2a85a7bfba5d423903b339155c454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e3fa928efebf2839a155fb1a6b1934dd4d2a85a7bfba5d423903b339155c454->enter($__internal_1e3fa928efebf2839a155fb1a6b1934dd4d2a85a7bfba5d423903b339155c454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dba5dcc30cd778f40960da6eeaeb56648cd84504c657dbde330bf3ea148a990d->leave($__internal_dba5dcc30cd778f40960da6eeaeb56648cd84504c657dbde330bf3ea148a990d_prof);

        
        $__internal_1e3fa928efebf2839a155fb1a6b1934dd4d2a85a7bfba5d423903b339155c454->leave($__internal_1e3fa928efebf2839a155fb1a6b1934dd4d2a85a7bfba5d423903b339155c454_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cacd15ff03346aa779b3512ba5ae230e00bfe4e5538ed544a80622ca3f3c41a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cacd15ff03346aa779b3512ba5ae230e00bfe4e5538ed544a80622ca3f3c41a7->enter($__internal_cacd15ff03346aa779b3512ba5ae230e00bfe4e5538ed544a80622ca3f3c41a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_27dfa235ce5af9fe118bd8ceebd823c277c66df592f1ecac7cc5694b69d2112d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27dfa235ce5af9fe118bd8ceebd823c277c66df592f1ecac7cc5694b69d2112d->enter($__internal_27dfa235ce5af9fe118bd8ceebd823c277c66df592f1ecac7cc5694b69d2112d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_27dfa235ce5af9fe118bd8ceebd823c277c66df592f1ecac7cc5694b69d2112d->leave($__internal_27dfa235ce5af9fe118bd8ceebd823c277c66df592f1ecac7cc5694b69d2112d_prof);

        
        $__internal_cacd15ff03346aa779b3512ba5ae230e00bfe4e5538ed544a80622ca3f3c41a7->leave($__internal_cacd15ff03346aa779b3512ba5ae230e00bfe4e5538ed544a80622ca3f3c41a7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5ece0a5262fedd786de682299b38e1626b88b0efd1c2cab5dc59d19d2a9c84e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ece0a5262fedd786de682299b38e1626b88b0efd1c2cab5dc59d19d2a9c84e->enter($__internal_c5ece0a5262fedd786de682299b38e1626b88b0efd1c2cab5dc59d19d2a9c84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d9bb5a776d7d8621e875d45e7ccbf2530f4f4704eac061c7d81458428436ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d9bb5a776d7d8621e875d45e7ccbf2530f4f4704eac061c7d81458428436ddb->enter($__internal_9d9bb5a776d7d8621e875d45e7ccbf2530f4f4704eac061c7d81458428436ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9d9bb5a776d7d8621e875d45e7ccbf2530f4f4704eac061c7d81458428436ddb->leave($__internal_9d9bb5a776d7d8621e875d45e7ccbf2530f4f4704eac061c7d81458428436ddb_prof);

        
        $__internal_c5ece0a5262fedd786de682299b38e1626b88b0efd1c2cab5dc59d19d2a9c84e->leave($__internal_c5ece0a5262fedd786de682299b38e1626b88b0efd1c2cab5dc59d19d2a9c84e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d8fb9c3dca6e56fc08eb65c129674185d6be87ea4826277976ed18f45a1fe1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d8fb9c3dca6e56fc08eb65c129674185d6be87ea4826277976ed18f45a1fe1e->enter($__internal_8d8fb9c3dca6e56fc08eb65c129674185d6be87ea4826277976ed18f45a1fe1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b52cde505dbd89b2b9d261dd034a099c0772c0ebec3cf92ebcd16524bd917dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b52cde505dbd89b2b9d261dd034a099c0772c0ebec3cf92ebcd16524bd917dd7->enter($__internal_b52cde505dbd89b2b9d261dd034a099c0772c0ebec3cf92ebcd16524bd917dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b52cde505dbd89b2b9d261dd034a099c0772c0ebec3cf92ebcd16524bd917dd7->leave($__internal_b52cde505dbd89b2b9d261dd034a099c0772c0ebec3cf92ebcd16524bd917dd7_prof);

        
        $__internal_8d8fb9c3dca6e56fc08eb65c129674185d6be87ea4826277976ed18f45a1fe1e->leave($__internal_8d8fb9c3dca6e56fc08eb65c129674185d6be87ea4826277976ed18f45a1fe1e_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Users/Ian/GitHub/citsciConnectors/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
