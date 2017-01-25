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
        $__internal_49fc3ed2dc6ec637b7b6b82a60c1783dd2d137043973577bf1381a2821d5d71f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49fc3ed2dc6ec637b7b6b82a60c1783dd2d137043973577bf1381a2821d5d71f->enter($__internal_49fc3ed2dc6ec637b7b6b82a60c1783dd2d137043973577bf1381a2821d5d71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0616b9784c6eb1e77ac7116feecdbf4de8c5e1e600ac586bb0c71f285867e4f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0616b9784c6eb1e77ac7116feecdbf4de8c5e1e600ac586bb0c71f285867e4f5->enter($__internal_0616b9784c6eb1e77ac7116feecdbf4de8c5e1e600ac586bb0c71f285867e4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49fc3ed2dc6ec637b7b6b82a60c1783dd2d137043973577bf1381a2821d5d71f->leave($__internal_49fc3ed2dc6ec637b7b6b82a60c1783dd2d137043973577bf1381a2821d5d71f_prof);

        
        $__internal_0616b9784c6eb1e77ac7116feecdbf4de8c5e1e600ac586bb0c71f285867e4f5->leave($__internal_0616b9784c6eb1e77ac7116feecdbf4de8c5e1e600ac586bb0c71f285867e4f5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_19523ca4a3ea3cdd2064978d09af54971562a80d1c27a0a090c71d0a0fad9dd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19523ca4a3ea3cdd2064978d09af54971562a80d1c27a0a090c71d0a0fad9dd9->enter($__internal_19523ca4a3ea3cdd2064978d09af54971562a80d1c27a0a090c71d0a0fad9dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_17bf168b56394ba444660a4f3e6207b3f79823a4553def0d8dd09a1e4e159399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17bf168b56394ba444660a4f3e6207b3f79823a4553def0d8dd09a1e4e159399->enter($__internal_17bf168b56394ba444660a4f3e6207b3f79823a4553def0d8dd09a1e4e159399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_17bf168b56394ba444660a4f3e6207b3f79823a4553def0d8dd09a1e4e159399->leave($__internal_17bf168b56394ba444660a4f3e6207b3f79823a4553def0d8dd09a1e4e159399_prof);

        
        $__internal_19523ca4a3ea3cdd2064978d09af54971562a80d1c27a0a090c71d0a0fad9dd9->leave($__internal_19523ca4a3ea3cdd2064978d09af54971562a80d1c27a0a090c71d0a0fad9dd9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ffe384802aa1251081ac3192057e10ec36726174e6ef0e51ce4af7cc7da4ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ffe384802aa1251081ac3192057e10ec36726174e6ef0e51ce4af7cc7da4ac2->enter($__internal_8ffe384802aa1251081ac3192057e10ec36726174e6ef0e51ce4af7cc7da4ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_edd6c01692a21a59ff2cd15c0723f2a97e252e3b6738d2c075a3570a84d0cf78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd6c01692a21a59ff2cd15c0723f2a97e252e3b6738d2c075a3570a84d0cf78->enter($__internal_edd6c01692a21a59ff2cd15c0723f2a97e252e3b6738d2c075a3570a84d0cf78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_edd6c01692a21a59ff2cd15c0723f2a97e252e3b6738d2c075a3570a84d0cf78->leave($__internal_edd6c01692a21a59ff2cd15c0723f2a97e252e3b6738d2c075a3570a84d0cf78_prof);

        
        $__internal_8ffe384802aa1251081ac3192057e10ec36726174e6ef0e51ce4af7cc7da4ac2->leave($__internal_8ffe384802aa1251081ac3192057e10ec36726174e6ef0e51ce4af7cc7da4ac2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f4cc7eec1c9feb01a1aa1cbf285587e24984eb88c5e2de5223058fd4432b953e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4cc7eec1c9feb01a1aa1cbf285587e24984eb88c5e2de5223058fd4432b953e->enter($__internal_f4cc7eec1c9feb01a1aa1cbf285587e24984eb88c5e2de5223058fd4432b953e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b3433a7938b72ae928d0ecef03386d2ed44d54bd0342837362426cf03d3ccbfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3433a7938b72ae928d0ecef03386d2ed44d54bd0342837362426cf03d3ccbfa->enter($__internal_b3433a7938b72ae928d0ecef03386d2ed44d54bd0342837362426cf03d3ccbfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b3433a7938b72ae928d0ecef03386d2ed44d54bd0342837362426cf03d3ccbfa->leave($__internal_b3433a7938b72ae928d0ecef03386d2ed44d54bd0342837362426cf03d3ccbfa_prof);

        
        $__internal_f4cc7eec1c9feb01a1aa1cbf285587e24984eb88c5e2de5223058fd4432b953e->leave($__internal_f4cc7eec1c9feb01a1aa1cbf285587e24984eb88c5e2de5223058fd4432b953e_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/Ian/GitHub/CitSci/FinalProject/citsciProj/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
