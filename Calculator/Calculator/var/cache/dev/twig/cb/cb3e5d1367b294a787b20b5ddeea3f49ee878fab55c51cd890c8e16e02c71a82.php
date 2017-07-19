<?php

/* base.html.twig */
class __TwigTemplate_da60fe32ff3790e0d7ba5707488b3202c23c6d19efa4b55a59ad5e513327105b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4899a138d77657ef625d3b028f270ca6103160be9645431c56d1e38e4340fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4899a138d77657ef625d3b028f270ca6103160be9645431c56d1e38e4340fec->enter($__internal_c4899a138d77657ef625d3b028f270ca6103160be9645431c56d1e38e4340fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_c4899a138d77657ef625d3b028f270ca6103160be9645431c56d1e38e4340fec->leave($__internal_c4899a138d77657ef625d3b028f270ca6103160be9645431c56d1e38e4340fec_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_a72ad2389e0b40aaa7c4a9811fec0752f4739c01222218293772efd9f7e64180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72ad2389e0b40aaa7c4a9811fec0752f4739c01222218293772efd9f7e64180->enter($__internal_a72ad2389e0b40aaa7c4a9811fec0752f4739c01222218293772efd9f7e64180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_a72ad2389e0b40aaa7c4a9811fec0752f4739c01222218293772efd9f7e64180->leave($__internal_a72ad2389e0b40aaa7c4a9811fec0752f4739c01222218293772efd9f7e64180_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5fbedf9ef69013a24662bc4965a79c86dbc205dd2fd08f9b33fd87f03e3edc9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fbedf9ef69013a24662bc4965a79c86dbc205dd2fd08f9b33fd87f03e3edc9d->enter($__internal_5fbedf9ef69013a24662bc4965a79c86dbc205dd2fd08f9b33fd87f03e3edc9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_5fbedf9ef69013a24662bc4965a79c86dbc205dd2fd08f9b33fd87f03e3edc9d->leave($__internal_5fbedf9ef69013a24662bc4965a79c86dbc205dd2fd08f9b33fd87f03e3edc9d_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_f10d87b57d09f841e2f2ea24f5ad732cbb0dd6c7f08c1af37ff8de7ee3a2aa01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10d87b57d09f841e2f2ea24f5ad732cbb0dd6c7f08c1af37ff8de7ee3a2aa01->enter($__internal_f10d87b57d09f841e2f2ea24f5ad732cbb0dd6c7f08c1af37ff8de7ee3a2aa01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_f10d87b57d09f841e2f2ea24f5ad732cbb0dd6c7f08c1af37ff8de7ee3a2aa01->leave($__internal_f10d87b57d09f841e2f2ea24f5ad732cbb0dd6c7f08c1af37ff8de7ee3a2aa01_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_5861196912e9d7ae9464097f87d20b2b233b4fe4bb43cec50e956e1e7ec5c1f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5861196912e9d7ae9464097f87d20b2b233b4fe4bb43cec50e956e1e7ec5c1f6->enter($__internal_5861196912e9d7ae9464097f87d20b2b233b4fe4bb43cec50e956e1e7ec5c1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_5861196912e9d7ae9464097f87d20b2b233b4fe4bb43cec50e956e1e7ec5c1f6->leave($__internal_5861196912e9d7ae9464097f87d20b2b233b4fe4bb43cec50e956e1e7ec5c1f6_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_db8a1e6682f7332d7fe7d36e543cd31895fe410c377ef13bdd30355835941533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db8a1e6682f7332d7fe7d36e543cd31895fe410c377ef13bdd30355835941533->enter($__internal_db8a1e6682f7332d7fe7d36e543cd31895fe410c377ef13bdd30355835941533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_db8a1e6682f7332d7fe7d36e543cd31895fe410c377ef13bdd30355835941533->leave($__internal_db8a1e6682f7332d7fe7d36e543cd31895fe410c377ef13bdd30355835941533_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_69c67fc78fdbac4374a48dae333bb4838b63c0c988375e93e88bef18e91bfda0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c67fc78fdbac4374a48dae333bb4838b63c0c988375e93e88bef18e91bfda0->enter($__internal_69c67fc78fdbac4374a48dae333bb4838b63c0c988375e93e88bef18e91bfda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_69c67fc78fdbac4374a48dae333bb4838b63c0c988375e93e88bef18e91bfda0->leave($__internal_69c67fc78fdbac4374a48dae333bb4838b63c0c988375e93e88bef18e91bfda0_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5d64d08d77e92d462cdd9f3679671a546dc70ede88e24514bceb03201c0eddd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d64d08d77e92d462cdd9f3679671a546dc70ede88e24514bceb03201c0eddd9->enter($__internal_5d64d08d77e92d462cdd9f3679671a546dc70ede88e24514bceb03201c0eddd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_5d64d08d77e92d462cdd9f3679671a546dc70ede88e24514bceb03201c0eddd9->leave($__internal_5d64d08d77e92d462cdd9f3679671a546dc70ede88e24514bceb03201c0eddd9_prof);

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
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
