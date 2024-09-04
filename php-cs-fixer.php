<?php
/**
 * PHP CS Fixer configuration file.
 *
 * @package YourTheme
 */

$finder = PhpCsFixer\Finder::create()
	->in([
		__DIR__,
	])
	->exclude([
		'vendor',
		'node_modules',
		'dist',
	])
	->notPath('wp-config.php')
	->notName('*.js')
	->notName('*.css')
	->notName('*.xml')
	->notName('*.txt');

$config = new PhpCsFixer\Config();
return $config
	->setRules([
		'@PSR12' => true,
		'array_syntax' => ['syntax' => 'short'],
		'no_unused_imports' => true,
		'ordered_imports' => ['sort_algorithm' => 'alpha'],
		'no_extra_blank_lines' => true,
		'no_trailing_whitespace' => true,
		'single_quote' => true,
		'no_empty_statement' => true,
		'no_extra_consecutive_blank_lines' => true,
		'binary_operator_spaces' => true,
		'whitespace_after_comma_in_array' => true,
		'trim_array_spaces' => true,
		'no_spaces_around_offset' => true,
		'no_useless_return' => true,
		'no_whitespace_in_blank_line' => true,
		'no_trailing_comma_in_singleline_array' => true,
		'trailing_comma_in_multiline' => true,
		'no_singleline_whitespace_before_semicolons' => true,
		'no_empty_phpdoc' => true,
		'phpdoc_trim' => true,
		'phpdoc_align' => true,
		'phpdoc_separation' => true,
		'phpdoc_single_line_var_spacing' => true,
		'phpdoc_var_without_name' => true,
		'class_attributes_separation' => ['elements' => ['method' => 'one']],
		'visibility_required' => true,
		'no_alternative_syntax' => true,
		'standardize_not_equals' => true,
		// Tab indentation rules
		'indentation_type' => true,
	])
	->setIndent("\t")
	->setLineEnding("\n")
	->setFinder($finder);