<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_99bce2bfd007c613e083694b9ccfe0285a4efc2dece9d917b7fd0b2ab2e372fa extends Twig_Template
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
        $__internal_60950ce6defa954ba7d5c0be595c907921de6f3028e9616b59ee38e608ecef21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60950ce6defa954ba7d5c0be595c907921de6f3028e9616b59ee38e608ecef21->enter($__internal_60950ce6defa954ba7d5c0be595c907921de6f3028e9616b59ee38e608ecef21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_afa3b667ea34f5d6b84f58376f56f6fdbb53d0521c1b09c543267582276b042c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa3b667ea34f5d6b84f58376f56f6fdbb53d0521c1b09c543267582276b042c->enter($__internal_afa3b667ea34f5d6b84f58376f56f6fdbb53d0521c1b09c543267582276b042c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_60950ce6defa954ba7d5c0be595c907921de6f3028e9616b59ee38e608ecef21->leave($__internal_60950ce6defa954ba7d5c0be595c907921de6f3028e9616b59ee38e608ecef21_prof);

        
        $__internal_afa3b667ea34f5d6b84f58376f56f6fdbb53d0521c1b09c543267582276b042c->leave($__internal_afa3b667ea34f5d6b84f58376f56f6fdbb53d0521c1b09c543267582276b042c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
