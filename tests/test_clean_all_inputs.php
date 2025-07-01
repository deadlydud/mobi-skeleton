<?php // $Id$
use PHPUnit\Framework\TestCase;

class test_clean_all_inputs extends TestCase {
    public function test_get_sanitization() {
        $sample_get_arr = [
            'example' => '<b>test</b>',
            'multi' => ['<i>alpha</i>', 'beta']
        ];
        $expected_arr = [
            'example' => '&lt;b&gt;test&lt;&sol;b&gt;',
            'multi' => ['&lt;i&gt;alpha&lt;&sol;i&gt;', 'beta']
        ];
        $cleaned_arr = clean_all_inputs($sample_get_arr);
        $this->assertEquals($expected_arr, $cleaned_arr);
    }

    public function test_post_sanitization() {
        $sample_post_arr = [
            'name' => "O'Reilly <script>",
            'msg' => '"Hello"'
        ];
        $expected_arr = [
            'name' => 'O&apos;Reilly &lt;script&gt;',
            'msg' => '&quot;Hello&quot;'
        ];
        $cleaned_arr = clean_all_inputs($sample_post_arr);
        $this->assertEquals($expected_arr, $cleaned_arr);
    }
} // end class test_clean_all_inputs
