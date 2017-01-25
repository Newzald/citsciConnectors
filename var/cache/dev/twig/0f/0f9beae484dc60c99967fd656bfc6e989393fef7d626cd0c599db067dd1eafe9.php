<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8108f5d1ee36c3878b2175a55b3d302e34d4747217b0f55cddfb625da60cfabe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_eca7f569628f3a019cc2c47e75bde0df16608c241596f23f9015ad96458a1212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eca7f569628f3a019cc2c47e75bde0df16608c241596f23f9015ad96458a1212->enter($__internal_eca7f569628f3a019cc2c47e75bde0df16608c241596f23f9015ad96458a1212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8c733688f79f6026020e2bd4c3d893154610aad55123a902c5666e00a8877200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c733688f79f6026020e2bd4c3d893154610aad55123a902c5666e00a8877200->enter($__internal_8c733688f79f6026020e2bd4c3d893154610aad55123a902c5666e00a8877200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eca7f569628f3a019cc2c47e75bde0df16608c241596f23f9015ad96458a1212->leave($__internal_eca7f569628f3a019cc2c47e75bde0df16608c241596f23f9015ad96458a1212_prof);

        
        $__internal_8c733688f79f6026020e2bd4c3d893154610aad55123a902c5666e00a8877200->leave($__internal_8c733688f79f6026020e2bd4c3d893154610aad55123a902c5666e00a8877200_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_22cd330e84ec38b4dd6e7f75a0079e5e248f2a445681b432f6dd36f752bce22d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22cd330e84ec38b4dd6e7f75a0079e5e248f2a445681b432f6dd36f752bce22d->enter($__internal_22cd330e84ec38b4dd6e7f75a0079e5e248f2a445681b432f6dd36f752bce22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7896a5273888b9372e711e04ca7ad4aa67b878e549bf84aeee5c97fdb0d78efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7896a5273888b9372e711e04ca7ad4aa67b878e549bf84aeee5c97fdb0d78efc->enter($__internal_7896a5273888b9372e711e04ca7ad4aa67b878e549bf84aeee5c97fdb0d78efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7896a5273888b9372e711e04ca7ad4aa67b878e549bf84aeee5c97fdb0d78efc->leave($__internal_7896a5273888b9372e711e04ca7ad4aa67b878e549bf84aeee5c97fdb0d78efc_prof);

        
        $__internal_22cd330e84ec38b4dd6e7f75a0079e5e248f2a445681b432f6dd36f752bce22d->leave($__internal_22cd330e84ec38b4dd6e7f75a0079e5e248f2a445681b432f6dd36f752bce22d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2d331b54e9bb9204443c0032194c61fe0903fe9274decb149c89a249472cb38b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d331b54e9bb9204443c0032194c61fe0903fe9274decb149c89a249472cb38b->enter($__internal_2d331b54e9bb9204443c0032194c61fe0903fe9274decb149c89a249472cb38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_032c266930e51dcdf273733392af97a159ce189e6244b808647b94b8c4b89886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_032c266930e51dcdf273733392af97a159ce189e6244b808647b94b8c4b89886->enter($__internal_032c266930e51dcdf273733392af97a159ce189e6244b808647b94b8c4b89886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_032c266930e51dcdf273733392af97a159ce189e6244b808647b94b8c4b89886->leave($__internal_032c266930e51dcdf273733392af97a159ce189e6244b808647b94b8c4b89886_prof);

        
        $__internal_2d331b54e9bb9204443c0032194c61fe0903fe9274decb149c89a249472cb38b->leave($__internal_2d331b54e9bb9204443c0032194c61fe0903fe9274decb149c89a249472cb38b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d2a50779d6dad062069f0f89bf851810f8d6f8f524644bc484ae4b615a27599c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2a50779d6dad062069f0f89bf851810f8d6f8f524644bc484ae4b615a27599c->enter($__internal_d2a50779d6dad062069f0f89bf851810f8d6f8f524644bc484ae4b615a27599c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ef4281f3af84fe75957c5be50fe21e4fecbe697a1f5129c70cbe2c8892496a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef4281f3af84fe75957c5be50fe21e4fecbe697a1f5129c70cbe2c8892496a52->enter($__internal_ef4281f3af84fe75957c5be50fe21e4fecbe697a1f5129c70cbe2c8892496a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ef4281f3af84fe75957c5be50fe21e4fecbe697a1f5129c70cbe2c8892496a52->leave($__internal_ef4281f3af84fe75957c5be50fe21e4fecbe697a1f5129c70cbe2c8892496a52_prof);

        
        $__internal_d2a50779d6dad062069f0f89bf851810f8d6f8f524644bc484ae4b615a27599c->leave($__internal_d2a50779d6dad062069f0f89bf851810f8d6f8f524644bc484ae4b615a27599c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/Ian/GitHub/citsciConnectors/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
