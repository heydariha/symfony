<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f42cf7b9155ccdb717fa27b41492c764fd40582c8244ab2e480d73845dac9d04 extends Twig_Template
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
        $__internal_9a7ee33f3ada974fe345d9faa2e122ce7041e7e8c470e19784c7d938e3ec007e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a7ee33f3ada974fe345d9faa2e122ce7041e7e8c470e19784c7d938e3ec007e->enter($__internal_9a7ee33f3ada974fe345d9faa2e122ce7041e7e8c470e19784c7d938e3ec007e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_8fe4dbe81beed5cec6774bdf4d35884d086dbcc0898b3aa4a29cc3c09d7f3d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe4dbe81beed5cec6774bdf4d35884d086dbcc0898b3aa4a29cc3c09d7f3d73->enter($__internal_8fe4dbe81beed5cec6774bdf4d35884d086dbcc0898b3aa4a29cc3c09d7f3d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9a7ee33f3ada974fe345d9faa2e122ce7041e7e8c470e19784c7d938e3ec007e->leave($__internal_9a7ee33f3ada974fe345d9faa2e122ce7041e7e8c470e19784c7d938e3ec007e_prof);

        
        $__internal_8fe4dbe81beed5cec6774bdf4d35884d086dbcc0898b3aa4a29cc3c09d7f3d73->leave($__internal_8fe4dbe81beed5cec6774bdf4d35884d086dbcc0898b3aa4a29cc3c09d7f3d73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
