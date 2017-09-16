<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_9ed47e9122ca43e0b48a170612f7b022aab2ce81a9e7820b48a3f9c9bdbe829f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_494a7bf853baa7512b5367df0b69545acd159bdaaa12db67620bd6c3f4ee98b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_494a7bf853baa7512b5367df0b69545acd159bdaaa12db67620bd6c3f4ee98b5->enter($__internal_494a7bf853baa7512b5367df0b69545acd159bdaaa12db67620bd6c3f4ee98b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_6f556cb3f379d2b6edf24b1405fabb47d4105323434ec18ab341b48333fe6950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f556cb3f379d2b6edf24b1405fabb47d4105323434ec18ab341b48333fe6950->enter($__internal_6f556cb3f379d2b6edf24b1405fabb47d4105323434ec18ab341b48333fe6950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_494a7bf853baa7512b5367df0b69545acd159bdaaa12db67620bd6c3f4ee98b5->leave($__internal_494a7bf853baa7512b5367df0b69545acd159bdaaa12db67620bd6c3f4ee98b5_prof);

        
        $__internal_6f556cb3f379d2b6edf24b1405fabb47d4105323434ec18ab341b48333fe6950->leave($__internal_6f556cb3f379d2b6edf24b1405fabb47d4105323434ec18ab341b48333fe6950_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
