<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_590e0d1656fe47aef845ab4cc569065fffc90539b95839532bd5d7832f02dd2f extends Twig_Template
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
        $__internal_682a5f615ff941983145a3261892589fa8eab826a3f964409e862069b0396f33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_682a5f615ff941983145a3261892589fa8eab826a3f964409e862069b0396f33->enter($__internal_682a5f615ff941983145a3261892589fa8eab826a3f964409e862069b0396f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_19711f58a9662bef60fb47377c444e20ef13ef7c4d56ba9a3e617a23db5d7b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19711f58a9662bef60fb47377c444e20ef13ef7c4d56ba9a3e617a23db5d7b9d->enter($__internal_19711f58a9662bef60fb47377c444e20ef13ef7c4d56ba9a3e617a23db5d7b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_682a5f615ff941983145a3261892589fa8eab826a3f964409e862069b0396f33->leave($__internal_682a5f615ff941983145a3261892589fa8eab826a3f964409e862069b0396f33_prof);

        
        $__internal_19711f58a9662bef60fb47377c444e20ef13ef7c4d56ba9a3e617a23db5d7b9d->leave($__internal_19711f58a9662bef60fb47377c444e20ef13ef7c4d56ba9a3e617a23db5d7b9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
