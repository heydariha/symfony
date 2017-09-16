<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0cfa98972b8d7a715fbc4bf274eeeb182a2b3b48e09817ff4b1cfa5daca1b6e0 extends Twig_Template
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
        $__internal_40ffa0caa2a86045d0d9ad5a790a14071060a46d64445749569c439223e564e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ffa0caa2a86045d0d9ad5a790a14071060a46d64445749569c439223e564e0->enter($__internal_40ffa0caa2a86045d0d9ad5a790a14071060a46d64445749569c439223e564e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_a08f140e22730e95c589e858f8198a9c1b7f546734f7661b9fea0282b234f7af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a08f140e22730e95c589e858f8198a9c1b7f546734f7661b9fea0282b234f7af->enter($__internal_a08f140e22730e95c589e858f8198a9c1b7f546734f7661b9fea0282b234f7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_40ffa0caa2a86045d0d9ad5a790a14071060a46d64445749569c439223e564e0->leave($__internal_40ffa0caa2a86045d0d9ad5a790a14071060a46d64445749569c439223e564e0_prof);

        
        $__internal_a08f140e22730e95c589e858f8198a9c1b7f546734f7661b9fea0282b234f7af->leave($__internal_a08f140e22730e95c589e858f8198a9c1b7f546734f7661b9fea0282b234f7af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
