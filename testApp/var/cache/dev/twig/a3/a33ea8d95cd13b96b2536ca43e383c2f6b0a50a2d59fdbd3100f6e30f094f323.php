<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d203453b5adb32e15cb07be2bd4dfdd5f32595680749d72d52af32f8d7673393 extends Twig_Template
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
        $__internal_085a004eaadbe28117e5fd2066d1ab4a7a9f58ec21ea4fadcd686ac1c665db6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085a004eaadbe28117e5fd2066d1ab4a7a9f58ec21ea4fadcd686ac1c665db6e->enter($__internal_085a004eaadbe28117e5fd2066d1ab4a7a9f58ec21ea4fadcd686ac1c665db6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_f66f53d6a458808aad7f1dd34f3dcb513b6a3f03db5708c284b3cc33e4a2e9ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66f53d6a458808aad7f1dd34f3dcb513b6a3f03db5708c284b3cc33e4a2e9ec->enter($__internal_f66f53d6a458808aad7f1dd34f3dcb513b6a3f03db5708c284b3cc33e4a2e9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_085a004eaadbe28117e5fd2066d1ab4a7a9f58ec21ea4fadcd686ac1c665db6e->leave($__internal_085a004eaadbe28117e5fd2066d1ab4a7a9f58ec21ea4fadcd686ac1c665db6e_prof);

        
        $__internal_f66f53d6a458808aad7f1dd34f3dcb513b6a3f03db5708c284b3cc33e4a2e9ec->leave($__internal_f66f53d6a458808aad7f1dd34f3dcb513b6a3f03db5708c284b3cc33e4a2e9ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
