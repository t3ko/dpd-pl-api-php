<?php
namespace T3ko\Dpd\StringHelper;


class StringHelper
{
    /**
     * @link https://www.php.net/manual/en/function.mb-str-split.php
     * @param $string
     * @param int $split_length
     * @param null $encoding
     * @return array|false|null
     */
    static public function mb_str_split($string, $split_length = 1, $encoding = null)
    {
        if (null !== $string && !\is_scalar($string) && !(\is_object($string) && \method_exists($string, '__toString'))) {
            trigger_error('mb_str_split(): expects parameter 1 to be string, '.\gettype($string).' given', E_USER_WARNING);
            return null;
        }
        if (null !== $split_length && !\is_bool($split_length) && !\is_numeric($split_length)) {
            trigger_error('mb_str_split(): expects parameter 2 to be int, '.\gettype($split_length).' given', E_USER_WARNING);
            return null;
        }
        $split_length = (int) $split_length;
        if (1 > $split_length) {
            trigger_error('mb_str_split(): The length of each segment must be greater than zero', E_USER_WARNING);
            return false;
        }
        if (null === $encoding) {
            $encoding = mb_internal_encoding();
        } else {
            $encoding = (string) $encoding;
        }

        if (! in_array($encoding, mb_list_encodings(), true)) {
            static $aliases;
            if ($aliases === null) {
                $aliases = [];
                foreach (mb_list_encodings() as $encoding) {
                    $encoding_aliases = mb_encoding_aliases($encoding);
                    if ($encoding_aliases) {
                        foreach ($encoding_aliases as $alias) {
                            $aliases[] = $alias;
                        }
                    }
                }
            }
            if (! in_array($encoding, $aliases, true)) {
                trigger_error('mb_str_split(): Unknown encoding "'.$encoding.'"', E_USER_WARNING);
                return null;
            }
        }

        $result = [];
        $length = mb_strlen($string, $encoding);
        for ($i = 0; $i < $length; $i += $split_length) {
            $result[] = mb_substr($string, $i, $split_length, $encoding);
        }
        return $result;
    }
}