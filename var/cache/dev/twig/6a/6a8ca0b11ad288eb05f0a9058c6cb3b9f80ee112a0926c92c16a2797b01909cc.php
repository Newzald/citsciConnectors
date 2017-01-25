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
        $__internal_4f85bcb468a46dfea8c829f31778fa5c268a8b982349d1998ad013b5cce6a84a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f85bcb468a46dfea8c829f31778fa5c268a8b982349d1998ad013b5cce6a84a->enter($__internal_4f85bcb468a46dfea8c829f31778fa5c268a8b982349d1998ad013b5cce6a84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blocks.html.twig"));

        $__internal_2f28ca2b35190b47bd2f9845c28e0015b5514a2cf5c253a011b31a69a4caa96c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f28ca2b35190b47bd2f9845c28e0015b5514a2cf5c253a011b31a69a4caa96c->enter($__internal_2f28ca2b35190b47bd2f9845c28e0015b5514a2cf5c253a011b31a69a4caa96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blocks.html.twig"));

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
        
        $__internal_4f85bcb468a46dfea8c829f31778fa5c268a8b982349d1998ad013b5cce6a84a->leave($__internal_4f85bcb468a46dfea8c829f31778fa5c268a8b982349d1998ad013b5cce6a84a_prof);

        
        $__internal_2f28ca2b35190b47bd2f9845c28e0015b5514a2cf5c253a011b31a69a4caa96c->leave($__internal_2f28ca2b35190b47bd2f9845c28e0015b5514a2cf5c253a011b31a69a4caa96c_prof);

    }

    // line 1
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d0abf9dd23ecafa07c6f62519bad1185eabcb8622a33975221e677bbe1a5ac03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0abf9dd23ecafa07c6f62519bad1185eabcb8622a33975221e677bbe1a5ac03->enter($__internal_d0abf9dd23ecafa07c6f62519bad1185eabcb8622a33975221e677bbe1a5ac03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7cb9027a131bc66f48b8284ed6b3b406e1c600f9305f0bffd08e300c9cdf3eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb9027a131bc66f48b8284ed6b3b406e1c600f9305f0bffd08e300c9cdf3eef->enter($__internal_7cb9027a131bc66f48b8284ed6b3b406e1c600f9305f0bffd08e300c9cdf3eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 2
        echo "    <script src=\"js/jquery-3.1.1.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"js/index.js\"></script>
";
        
        $__internal_7cb9027a131bc66f48b8284ed6b3b406e1c600f9305f0bffd08e300c9cdf3eef->leave($__internal_7cb9027a131bc66f48b8284ed6b3b406e1c600f9305f0bffd08e300c9cdf3eef_prof);

        
        $__internal_d0abf9dd23ecafa07c6f62519bad1185eabcb8622a33975221e677bbe1a5ac03->leave($__internal_d0abf9dd23ecafa07c6f62519bad1185eabcb8622a33975221e677bbe1a5ac03_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c4df6d340117cb3e516d569ccf9f51d70896375dc87380e779e6b7844c0eeb8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4df6d340117cb3e516d569ccf9f51d70896375dc87380e779e6b7844c0eeb8b->enter($__internal_c4df6d340117cb3e516d569ccf9f51d70896375dc87380e779e6b7844c0eeb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1a9bcb2a4dbaff97c01af7f030c7939f6471b6f3b41031fcc5b8be24421f4289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a9bcb2a4dbaff97c01af7f030c7939f6471b6f3b41031fcc5b8be24421f4289->enter($__internal_1a9bcb2a4dbaff97c01af7f030c7939f6471b6f3b41031fcc5b8be24421f4289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
";
        
        $__internal_1a9bcb2a4dbaff97c01af7f030c7939f6471b6f3b41031fcc5b8be24421f4289->leave($__internal_1a9bcb2a4dbaff97c01af7f030c7939f6471b6f3b41031fcc5b8be24421f4289_prof);

        
        $__internal_c4df6d340117cb3e516d569ccf9f51d70896375dc87380e779e6b7844c0eeb8b->leave($__internal_c4df6d340117cb3e516d569ccf9f51d70896375dc87380e779e6b7844c0eeb8b_prof);

    }

    // line 11
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8b8bcb008c741e51cc62813ac2a408c4a934a319af049e2489999181dba893f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8bcb008c741e51cc62813ac2a408c4a934a319af049e2489999181dba893f2->enter($__internal_8b8bcb008c741e51cc62813ac2a408c4a934a319af049e2489999181dba893f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_10e747539d48c016b962ca4b0b021d2e319135dd6a8cbd0d5933fc35001711f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e747539d48c016b962ca4b0b021d2e319135dd6a8cbd0d5933fc35001711f0->enter($__internal_10e747539d48c016b962ca4b0b021d2e319135dd6a8cbd0d5933fc35001711f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_10e747539d48c016b962ca4b0b021d2e319135dd6a8cbd0d5933fc35001711f0->leave($__internal_10e747539d48c016b962ca4b0b021d2e319135dd6a8cbd0d5933fc35001711f0_prof);

        
        $__internal_8b8bcb008c741e51cc62813ac2a408c4a934a319af049e2489999181dba893f2->leave($__internal_8b8bcb008c741e51cc62813ac2a408c4a934a319af049e2489999181dba893f2_prof);

    }

    // line 26
    public function block_questionaire($context, array $blocks = array())
    {
        $__internal_fa020cbe2aa6aed22bb18c36f08e13191d8ce1ce20999b4f70674465aabf27ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa020cbe2aa6aed22bb18c36f08e13191d8ce1ce20999b4f70674465aabf27ae->enter($__internal_fa020cbe2aa6aed22bb18c36f08e13191d8ce1ce20999b4f70674465aabf27ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "questionaire"));

        $__internal_a01062c86e125e9c1247b71dacd15fa0d553ec645e0199cdc6e0f0063c9d18fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a01062c86e125e9c1247b71dacd15fa0d553ec645e0199cdc6e0f0063c9d18fe->enter($__internal_a01062c86e125e9c1247b71dacd15fa0d553ec645e0199cdc6e0f0063c9d18fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "questionaire"));

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
        
        $__internal_a01062c86e125e9c1247b71dacd15fa0d553ec645e0199cdc6e0f0063c9d18fe->leave($__internal_a01062c86e125e9c1247b71dacd15fa0d553ec645e0199cdc6e0f0063c9d18fe_prof);

        
        $__internal_fa020cbe2aa6aed22bb18c36f08e13191d8ce1ce20999b4f70674465aabf27ae->leave($__internal_fa020cbe2aa6aed22bb18c36f08e13191d8ce1ce20999b4f70674465aabf27ae_prof);

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
{% endblock %}", "blocks.html.twig", "/Users/Ian/GitHub/CitSci/FinalProject/citsciProj/app/Resources/views/blocks.html.twig");
    }
}
