<?php

/* blocks.html.twig */
class __TwigTemplate_46887a5c5b7101735a2f68ab8ce3f594fe684e8694a0ef7fe7bfe920a291bfdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'questionaire' => array($this, 'block_questionaire'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c10cbbe894a4fa56833f83c1e825dd56dd5e01bcb0b3d8c2221c35547391a168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c10cbbe894a4fa56833f83c1e825dd56dd5e01bcb0b3d8c2221c35547391a168->enter($__internal_c10cbbe894a4fa56833f83c1e825dd56dd5e01bcb0b3d8c2221c35547391a168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blocks.html.twig"));

        $__internal_d6a0d260542e32c5fe0ed388fc67adf9745ecaa27488a8d4cafcdf47c153f58d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a0d260542e32c5fe0ed388fc67adf9745ecaa27488a8d4cafcdf47c153f58d->enter($__internal_d6a0d260542e32c5fe0ed388fc67adf9745ecaa27488a8d4cafcdf47c153f58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blocks.html.twig"));

        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('sidebar', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('questionaire', $context, $blocks);
        
        $__internal_c10cbbe894a4fa56833f83c1e825dd56dd5e01bcb0b3d8c2221c35547391a168->leave($__internal_c10cbbe894a4fa56833f83c1e825dd56dd5e01bcb0b3d8c2221c35547391a168_prof);

        
        $__internal_d6a0d260542e32c5fe0ed388fc67adf9745ecaa27488a8d4cafcdf47c153f58d->leave($__internal_d6a0d260542e32c5fe0ed388fc67adf9745ecaa27488a8d4cafcdf47c153f58d_prof);

    }

    // line 1
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_60a9c12f4145e6b7c514d0bc10052c8b07c0a79b1e9b5836a8d25277aeecc558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60a9c12f4145e6b7c514d0bc10052c8b07c0a79b1e9b5836a8d25277aeecc558->enter($__internal_60a9c12f4145e6b7c514d0bc10052c8b07c0a79b1e9b5836a8d25277aeecc558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1ec4d96e4d1e248eea1f7d7f1193f491e24f7bb53db734b3e71f4d8badf9f686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec4d96e4d1e248eea1f7d7f1193f491e24f7bb53db734b3e71f4d8badf9f686->enter($__internal_1ec4d96e4d1e248eea1f7d7f1193f491e24f7bb53db734b3e71f4d8badf9f686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 2
        echo "    <script src=\"js/jquery-3.1.1.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/index.js\"></script>
";
        
        $__internal_1ec4d96e4d1e248eea1f7d7f1193f491e24f7bb53db734b3e71f4d8badf9f686->leave($__internal_1ec4d96e4d1e248eea1f7d7f1193f491e24f7bb53db734b3e71f4d8badf9f686_prof);

        
        $__internal_60a9c12f4145e6b7c514d0bc10052c8b07c0a79b1e9b5836a8d25277aeecc558->leave($__internal_60a9c12f4145e6b7c514d0bc10052c8b07c0a79b1e9b5836a8d25277aeecc558_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4a4f2e140a5e9fb464d42ba2fadcc1edab076be769de8617b9536495aa41df8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a4f2e140a5e9fb464d42ba2fadcc1edab076be769de8617b9536495aa41df8b->enter($__internal_4a4f2e140a5e9fb464d42ba2fadcc1edab076be769de8617b9536495aa41df8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bcc5121389b94b5332aa4a956239cd2709414ff91b1f10827803f60cd30d1feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc5121389b94b5332aa4a956239cd2709414ff91b1f10827803f60cd30d1feb->enter($__internal_bcc5121389b94b5332aa4a956239cd2709414ff91b1f10827803f60cd30d1feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
";
        
        $__internal_bcc5121389b94b5332aa4a956239cd2709414ff91b1f10827803f60cd30d1feb->leave($__internal_bcc5121389b94b5332aa4a956239cd2709414ff91b1f10827803f60cd30d1feb_prof);

        
        $__internal_4a4f2e140a5e9fb464d42ba2fadcc1edab076be769de8617b9536495aa41df8b->leave($__internal_4a4f2e140a5e9fb464d42ba2fadcc1edab076be769de8617b9536495aa41df8b_prof);

    }

    // line 11
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_5583220bb0f8d6c58ad94e939f7e05c2db135e17c754cf71b2867b859b4ee501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5583220bb0f8d6c58ad94e939f7e05c2db135e17c754cf71b2867b859b4ee501->enter($__internal_5583220bb0f8d6c58ad94e939f7e05c2db135e17c754cf71b2867b859b4ee501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_2ad1120e81172ba63c8acada63abaaccfd0068bd554485af4c1916f4f6d6da94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad1120e81172ba63c8acada63abaaccfd0068bd554485af4c1916f4f6d6da94->enter($__internal_2ad1120e81172ba63c8acada63abaaccfd0068bd554485af4c1916f4f6d6da94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 12
        echo "    <div class=\"col-md-3 push-md-9\">
        <h1>
            Instructions
        </h1>
        <p>
            This is a list of 250 surnames taken randomly form the Manhattan phonebook.
            <br><br>
            Go down the list and give yourself a point every time you see a surname that is shared by someone you know. (The definition of “know” here is very broad. It is if you sat down next to that person on a train, you would know their name if they introduced themselves to you, and they would know your name.) Multiple names count. If the name is Johnson, in other words, and you know three Johnsons, you get three points.
            <br><br>
            Once you've finished, double check your identifying information and hit submit.
        </p>
    </div>
";
        
        $__internal_2ad1120e81172ba63c8acada63abaaccfd0068bd554485af4c1916f4f6d6da94->leave($__internal_2ad1120e81172ba63c8acada63abaaccfd0068bd554485af4c1916f4f6d6da94_prof);

        
        $__internal_5583220bb0f8d6c58ad94e939f7e05c2db135e17c754cf71b2867b859b4ee501->leave($__internal_5583220bb0f8d6c58ad94e939f7e05c2db135e17c754cf71b2867b859b4ee501_prof);

    }

    // line 26
    public function block_questionaire($context, array $blocks = array())
    {
        $__internal_77e9f6fa414cd6030eceaa3bb066b8adf25a447b28d811daf018d75e0afb6a6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e9f6fa414cd6030eceaa3bb066b8adf25a447b28d811daf018d75e0afb6a6a->enter($__internal_77e9f6fa414cd6030eceaa3bb066b8adf25a447b28d811daf018d75e0afb6a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "questionaire"));

        $__internal_89447e9a0a860e37d7b3f0688792a2e4cac971e430111f8c9a4c95234daefac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89447e9a0a860e37d7b3f0688792a2e4cac971e430111f8c9a4c95234daefac5->enter($__internal_89447e9a0a860e37d7b3f0688792a2e4cac971e430111f8c9a4c95234daefac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "questionaire"));

        // line 27
        echo "    <form class=\"col-md-9 pull-md-3\" id=\"questionaire\">
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demographic_questions"]) ? $context["demographic_questions"] : $this->getContext($context, "demographic_questions")));
        foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
            // line 29
            echo "        <div class=\"form-group row\">
            <label for=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "id", array()), "html", null, true);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "name", array()), "html", null, true);
            echo "</label>
            <div class=\"col-sm-10\">
                <input class=\"form-control\" type=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "type", array()), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "sample", array()), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "id", array()), "html", null, true);
            echo "\">
                ";
            // line 33
            if ($this->getAttribute($context["info"], "help", array(), "any", true, true)) {
                // line 34
                echo "                    <small id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "id", array()), "html", null, true);
                echo "Help\" class=\"form-text text-muted\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "help", array()), "html", null, true);
                echo "</small>
                ";
            }
            // line 36
            echo "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    <hr>
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["surnames"]) ? $context["surnames"] : $this->getContext($context, "surnames")));
        foreach ($context['_seq'] as $context["_key"] => $context["surname"]) {
            // line 41
            echo "        <div class=\"form-group row text-right\">
            <label for=\"";
            // line 42
            echo twig_escape_filter($this->env, $context["surname"], "html", null, true);
            echo "\" class=\"col-4 col-form-label\">";
            echo twig_escape_filter($this->env, $context["surname"], "html", null, true);
            echo "</label>
            <div class=\"col-8\">
                <input class=\"form-control surname\" type=\"number\" value=\"0\" id=\"";
            // line 44
            echo twig_escape_filter($this->env, $context["surname"], "html", null, true);
            echo "\">
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['surname'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        <button type=\"submit\" class=\"btn btn-primary\" style=\"float:right;\">Submit</button>
    </form>
";
        
        $__internal_89447e9a0a860e37d7b3f0688792a2e4cac971e430111f8c9a4c95234daefac5->leave($__internal_89447e9a0a860e37d7b3f0688792a2e4cac971e430111f8c9a4c95234daefac5_prof);

        
        $__internal_77e9f6fa414cd6030eceaa3bb066b8adf25a447b28d811daf018d75e0afb6a6a->leave($__internal_77e9f6fa414cd6030eceaa3bb066b8adf25a447b28d811daf018d75e0afb6a6a_prof);

    }

    public function getTemplateName()
    {
        return "blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  206 => 48,  196 => 44,  189 => 42,  186 => 41,  182 => 40,  179 => 39,  171 => 36,  163 => 34,  161 => 33,  153 => 32,  146 => 30,  143 => 29,  139 => 28,  136 => 27,  127 => 26,  105 => 12,  96 => 11,  85 => 8,  76 => 7,  63 => 2,  54 => 1,  44 => 26,  41 => 25,  39 => 11,  36 => 10,  34 => 7,  31 => 6,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block javascripts %}
    <script src=\"js/jquery-3.1.1.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/index.js\"></script>
{% endblock %}

{% block stylesheets %}
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
{% endblock %}

{% block sidebar %}
    <div class=\"col-md-3 push-md-9\">
        <h1>
            Instructions
        </h1>
        <p>
            This is a list of 250 surnames taken randomly form the Manhattan phonebook.
            <br><br>
            Go down the list and give yourself a point every time you see a surname that is shared by someone you know. (The definition of “know” here is very broad. It is if you sat down next to that person on a train, you would know their name if they introduced themselves to you, and they would know your name.) Multiple names count. If the name is Johnson, in other words, and you know three Johnsons, you get three points.
            <br><br>
            Once you've finished, double check your identifying information and hit submit.
        </p>
    </div>
{% endblock %}

{% block questionaire %}
    <form class=\"col-md-9 pull-md-3\" id=\"questionaire\">
    {% for info in demographic_questions %}
        <div class=\"form-group row\">
            <label for=\"{{ info.id }}\" class=\"col-sm-2 col-form-label\">{{ info.name }}</label>
            <div class=\"col-sm-10\">
                <input class=\"form-control\" type=\"{{ info.type }}\" placeholder=\"{{ info.sample }}\" id=\"{{ info.id }}\">
                {% if info.help is defined %}
                    <small id=\"{{ info.id }}Help\" class=\"form-text text-muted\">{{ info.help }}</small>
                {% endif %}
            </div>
        </div>
    {% endfor %}
    <hr>
    {% for surname in surnames %}
        <div class=\"form-group row text-right\">
            <label for=\"{{ surname }}\" class=\"col-4 col-form-label\">{{ surname }}</label>
            <div class=\"col-8\">
                <input class=\"form-control surname\" type=\"number\" value=\"0\" id=\"{{ surname }}\">
            </div>
        </div>
    {% endfor %}
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float:right;\">Submit</button>
    </form>
{% endblock %}", "blocks.html.twig", "/Users/Ian/GitHub/citsciConnectors/app/Resources/views/blocks.html.twig");
    }
}
