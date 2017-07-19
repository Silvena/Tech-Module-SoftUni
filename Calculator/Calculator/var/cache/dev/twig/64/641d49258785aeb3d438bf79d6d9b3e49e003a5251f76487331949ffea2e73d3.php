<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_94890f5b7fcde5fe2412a0608b4b16f5a94f0258886a9b66916ef03dcf9ffe2d extends Twig_Template
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
        $__internal_adb2ef5738be6e2e1da68394d0bab01213f5b354a625c93978072b54d827af80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb2ef5738be6e2e1da68394d0bab01213f5b354a625c93978072b54d827af80->enter($__internal_adb2ef5738be6e2e1da68394d0bab01213f5b354a625c93978072b54d827af80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adb2ef5738be6e2e1da68394d0bab01213f5b354a625c93978072b54d827af80->leave($__internal_adb2ef5738be6e2e1da68394d0bab01213f5b354a625c93978072b54d827af80_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d2c2976cbe0110cd602d764ce00350fc6cbab38f60ca0c76cd9fce73d96575e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c2976cbe0110cd602d764ce00350fc6cbab38f60ca0c76cd9fce73d96575e2->enter($__internal_d2c2976cbe0110cd602d764ce00350fc6cbab38f60ca0c76cd9fce73d96575e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d2c2976cbe0110cd602d764ce00350fc6cbab38f60ca0c76cd9fce73d96575e2->leave($__internal_d2c2976cbe0110cd602d764ce00350fc6cbab38f60ca0c76cd9fce73d96575e2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a73809f8b2b5069a15898b3750db38f370642918b2f0f7a9f7f7795513f0526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a73809f8b2b5069a15898b3750db38f370642918b2f0f7a9f7f7795513f0526->enter($__internal_4a73809f8b2b5069a15898b3750db38f370642918b2f0f7a9f7f7795513f0526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4a73809f8b2b5069a15898b3750db38f370642918b2f0f7a9f7f7795513f0526->leave($__internal_4a73809f8b2b5069a15898b3750db38f370642918b2f0f7a9f7f7795513f0526_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_741e143a5fb9cf6a9a94c7a96208dd879fef3fcac6c3433cb10a3dbed5016f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_741e143a5fb9cf6a9a94c7a96208dd879fef3fcac6c3433cb10a3dbed5016f96->enter($__internal_741e143a5fb9cf6a9a94c7a96208dd879fef3fcac6c3433cb10a3dbed5016f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_741e143a5fb9cf6a9a94c7a96208dd879fef3fcac6c3433cb10a3dbed5016f96->leave($__internal_741e143a5fb9cf6a9a94c7a96208dd879fef3fcac6c3433cb10a3dbed5016f96_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
