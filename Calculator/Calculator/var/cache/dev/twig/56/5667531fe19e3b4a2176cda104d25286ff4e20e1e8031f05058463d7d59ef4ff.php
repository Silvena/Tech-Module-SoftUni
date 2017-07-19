<?php

/* form/fields.html.twig */
class __TwigTemplate_af3b509a4bd60ca2f6c3f1b7cac5ebe4271ddb3871db23ca2ef87c20e3be9415 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f514366e440f9fc548ab755de4c7cdfaeab4d71cb62421af8467ff2f7845f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f514366e440f9fc548ab755de4c7cdfaeab4d71cb62421af8467ff2f7845f8d->enter($__internal_1f514366e440f9fc548ab755de4c7cdfaeab4d71cb62421af8467ff2f7845f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_1f514366e440f9fc548ab755de4c7cdfaeab4d71cb62421af8467ff2f7845f8d->leave($__internal_1f514366e440f9fc548ab755de4c7cdfaeab4d71cb62421af8467ff2f7845f8d_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_eeeb776c1a14f49f65c67f09424ea659c675c96ba8da5967d1ec7e8fc0be26a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeeb776c1a14f49f65c67f09424ea659c675c96ba8da5967d1ec7e8fc0be26a7->enter($__internal_eeeb776c1a14f49f65c67f09424ea659c675c96ba8da5967d1ec7e8fc0be26a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            ";
        // line 15
        echo "                ";
        // line 16
        echo "            ";
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_eeeb776c1a14f49f65c67f09424ea659c675c96ba8da5967d1ec7e8fc0be26a7->leave($__internal_eeeb776c1a14f49f65c67f09424ea659c675c96ba8da5967d1ec7e8fc0be26a7_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  48 => 15,  44 => 13,  41 => 12,  38 => 11,  26 => 10,  23 => 9,);
    }

    public function getSource()
    {
        return "{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    {% spaceless %}
        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            {{ block('datetime_widget') }}
            {#<span class=\"input-group-addon\">#}
                {#<span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>#}
            {#</span>#}
        </div>
    {% endspaceless %}
{% endblock %}
";
    }
}
