<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_edcfddc6f1672083536f90312e07ecdc970931d66572c4db7f6072dc6b40abc0 extends Twig_Template
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
        $__internal_cc1a0e5f176184e5edb4ccde0bfbc075c04a54aa594e86a956b5391a57affd46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc1a0e5f176184e5edb4ccde0bfbc075c04a54aa594e86a956b5391a57affd46->enter($__internal_cc1a0e5f176184e5edb4ccde0bfbc075c04a54aa594e86a956b5391a57affd46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc1a0e5f176184e5edb4ccde0bfbc075c04a54aa594e86a956b5391a57affd46->leave($__internal_cc1a0e5f176184e5edb4ccde0bfbc075c04a54aa594e86a956b5391a57affd46_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_86f45ac1d42b6e0fda4069f12940d5779ffdc3d306b94698f63d25b479c77b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f45ac1d42b6e0fda4069f12940d5779ffdc3d306b94698f63d25b479c77b79->enter($__internal_86f45ac1d42b6e0fda4069f12940d5779ffdc3d306b94698f63d25b479c77b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_86f45ac1d42b6e0fda4069f12940d5779ffdc3d306b94698f63d25b479c77b79->leave($__internal_86f45ac1d42b6e0fda4069f12940d5779ffdc3d306b94698f63d25b479c77b79_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_78a3c42499755bc7a70728d78870f2e3a7b7fda9a4c8d5cf940ef79ffa790ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78a3c42499755bc7a70728d78870f2e3a7b7fda9a4c8d5cf940ef79ffa790ca3->enter($__internal_78a3c42499755bc7a70728d78870f2e3a7b7fda9a4c8d5cf940ef79ffa790ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_78a3c42499755bc7a70728d78870f2e3a7b7fda9a4c8d5cf940ef79ffa790ca3->leave($__internal_78a3c42499755bc7a70728d78870f2e3a7b7fda9a4c8d5cf940ef79ffa790ca3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_612bb654cdf97b37b0441e6d7b943e55eecbc44e0f7b9d54f02fd311224ab56b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612bb654cdf97b37b0441e6d7b943e55eecbc44e0f7b9d54f02fd311224ab56b->enter($__internal_612bb654cdf97b37b0441e6d7b943e55eecbc44e0f7b9d54f02fd311224ab56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_612bb654cdf97b37b0441e6d7b943e55eecbc44e0f7b9d54f02fd311224ab56b->leave($__internal_612bb654cdf97b37b0441e6d7b943e55eecbc44e0f7b9d54f02fd311224ab56b_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
";
    }
}
