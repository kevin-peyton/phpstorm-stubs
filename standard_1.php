<?php


/**
 * Make a string uppercase
 * @link http://php.net/manual/en/function.strtoupper.php
 * @param string $string <p>
 * The input string.
 * </p>
 * @return string the uppercased string.
 * @since 4.0
 * @since 5.0
 */
function strtoupper ($string) {}

/**
 * Make a string lowercase
 * @link http://php.net/manual/en/function.strtolower.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @return string the lowercased string.
 * @since 4.0
 * @since 5.0
 */
function strtolower ($str) {}

/**
 * Find the position of the first occurrence of a substring in a string
 * @link http://php.net/manual/en/function.strpos.php
 * @param string $haystack <p>
 * The string to search in
 * </p>
 * @param mixed $needle <p>
 * If <b>needle</b> is not a string, it is converted
 * to an integer and applied as the ordinal value of a character.
 * </p>
 * @param int $offset [optional] <p>
 * If specified, search will start this number of characters counted from
 * the beginning of the string. Unlike {@see strrpos()} and {@see strripos()}, the offset cannot be negative.
 * </p>
 * @return int|boolean <p>
 * Returns the position where the needle exists relative to the beginnning of
 * the <b>haystack</b> string (independent of search direction
 * or offset).
 * Also note that string positions start at 0, and not 1.
 * </p>
 * <p>
 * Returns <b>FALSE</b> if the needle was not found.
 * </p>
 * @since 4.0
 * @since 5.0
 */
function strpos ($haystack, $needle, $offset = 0) {}

/**
 * Find position of first occurrence of a case-insensitive string
 * @link http://php.net/manual/en/function.stripos.php
 * @param string $haystack <p>
 * The string to search in
 * </p>
 * @param string $needle <p>
 * Note that the needle may be a string of one or
 * more characters.
 * </p>
 * <p>
 * If needle is not a string, it is converted to
 * an integer and applied as the ordinal value of a character.
 * </p>
 * @param int $offset [optional] <p>
 * The optional offset parameter allows you
 * to specify which character in haystack to
 * start searching. The position returned is still relative to the
 * beginning of haystack.
 * </p>
 * @return int If needle is not found,
 * stripos will return boolean false.
 * @since 5.0
 */
function stripos ($haystack, $needle, $offset = null) {}

/**
 * Find the position of the last occurrence of a substring in a string
 * @link http://php.net/manual/en/function.strrpos.php
 * @param string $haystack <p>
 * The string to search in.
 * </p>
 * @param string $needle <p>
 * If <b>needle</b> is not a string, it is converted to an integer and applied as the ordinal value of a character.
 * </p>
 * @param int $offset [optional] <p>
 * If specified, search will start this number of characters counted from the beginning of the string. If the value is negative, search will instead start from that many characters from the end of the string, searching backwards.
 * </p>
 * @return int|boolean <p>
 * Returns the position where the needle exists relative to the beginning of
 * the <b>haystack</b> string (independent of search direction
 * or offset).
 * Also note that string positions start at 0, and not 1.
 * </p>
 * <p>
 * Returns <b>FALSE</b> if the needle was not found.
 * </p>
 * @since 4.0
 * @since 5.0
 */
function strrpos ($haystack, $needle, $offset = 0) {}

/**
 * Find position of last occurrence of a case-insensitive string in a string
 * @link http://php.net/manual/en/function.strripos.php
 * @param string $haystack <p>
 * The string to search in
 * </p>
 * @param string $needle <p>
 * Note that the needle may be a string of one or
 * more characters.
 * </p>
 * @param int $offset [optional] <p>
 * The offset parameter may be specified to begin
 * searching an arbitrary number of characters into the string.
 * </p>
 * <p>
 * Negative offset values will start the search at
 * offset characters from the
 * start of the string.
 * </p>
 * @return int the numerical position of the last occurrence of
 * needle. Also note that string positions start at 0,
 * and not 1.
 * </p>
 * <p>
 * If needle is not found, false is returned.
 * @since 5.0
 */
function strripos ($haystack, $needle, $offset = null) {}

/**
 * Reverse a string
 * @link http://php.net/manual/en/function.strrev.php
 * @param string $string <p>
 * The string to be reversed.
 * </p>
 * @return string the reversed string.
 * @since 4.0
 * @since 5.0
 */
function strrev ($string) {}

/**
 * Convert logical Hebrew text to visual text
 * @link http://php.net/manual/en/function.hebrev.php
 * @param string $hebrew_text <p>
 * A Hebrew input string.
 * </p>
 * @param int $max_chars_per_line [optional] <p>
 * This optional parameter indicates maximum number of characters per
 * line that will be returned.
 * </p>
 * @return string the visual string.
 * @since 4.0
 * @since 5.0
 */
function hebrev ($hebrew_text, $max_chars_per_line = null) {}

/**
 * Convert logical Hebrew text to visual text with newline conversion
 * @link http://php.net/manual/en/function.hebrevc.php
 * @param string $hebrew_text <p>
 * A Hebrew input string.
 * </p>
 * @param int $max_chars_per_line [optional] <p>
 * This optional parameter indicates maximum number of characters per
 * line that will be returned.
 * </p>
 * @return string the visual string.
 * @since 4.0
 * @since 5.0
 */
function hebrevc ($hebrew_text, $max_chars_per_line = null) {}

/**
 * Inserts HTML line breaks before all newlines in a string
 * @link http://php.net/manual/en/function.nl2br.php
 * @param string $string <p>
 * The input string.
 * </p>
 * @param bool $is_xhtml [optional] <p>
 * Whenever to use XHTML compatible line breaks or not.
 * </p>
 * @return string the altered string.
 * @since 4.0
 * @since 5.0
 */
function nl2br ($string, $is_xhtml = null) {}

/**
 * Returns filename component of path
 * @link http://php.net/manual/en/function.basename.php
 * @param string $path <p>
 * A path.
 * </p>
 * <p>
 * On Windows, both slash (/) and backslash
 * (\) are used as directory separator character. In
 * other environments, it is the forward slash (/).
 * </p>
 * @param string $suffix [optional] <p>
 * If the filename ends in suffix this will also
 * be cut off.
 * </p>
 * @return string the base name of the given path.
 * @since 4.0
 * @since 5.0
 */
function basename ($path, $suffix = null) {}

/**
 * Returns directory name component of path
 * @link http://php.net/manual/en/function.dirname.php
 * @param string $path <p>
 * A path.
 * </p>
 * <p>
 * On Windows, both slash (/) and backslash
 * (\) are used as directory separator character. In
 * other environments, it is the forward slash (/).
 * </p>
 * @return string the name of the directory. If there are no slashes in
 * path, a dot ('.') is returned,
 * indicating the current directory. Otherwise, the returned string is
 * path with any trailing
 * /component removed.
 * @since 4.0
 * @since 5.0
 */
function dirname ($path) {}

/**
 * Returns information about a file path
 * @link http://php.net/manual/en/function.pathinfo.php
 * @param string $path <p>
 * The path being checked.
 * </p>
 * @param int $options [optional] <p>
 * You can specify which elements are returned with optional parameter
 * options. It composes from
 * PATHINFO_DIRNAME,
 * PATHINFO_BASENAME,
 * PATHINFO_EXTENSION and
 * PATHINFO_FILENAME. It
 * defaults to return all elements.
 * </p>
 * @return mixed The following associative array elements are returned:
 * dirname, basename,
 * extension (if any), and filename.
 * </p>
 * <p>
 * If options is used, this function will return a 
 * string if not all elements are requested.
 * @since 4.0.3
 * @since 5.0
 */
function pathinfo ($path, $options = null) {}

/**
 * Un-quotes a quoted string
 * @link http://php.net/manual/en/function.stripslashes.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @return string a string with backslashes stripped off.
 * (\' becomes ' and so on.)
 * Double backslashes (\\) are made into a single
 * backslash (\).
 * @since 4.0
 * @since 5.0
 */
function stripslashes ($str) {}

/**
 * Un-quote string quoted with <function>addcslashes</function>
 * @link http://php.net/manual/en/function.stripcslashes.php
 * @param string $str <p>
 * The string to be unescaped.
 * </p>
 * @return string the unescaped string.
 * @since 4.0
 * @since 5.0
 */
function stripcslashes ($str) {}

/**
 * Find first occurrence of a string
 * @link http://php.net/manual/en/function.strstr.php
 * @param string $haystack <p>
 * The input string.
 * </p>
 * @param mixed $needle <p>
 * If needle is not a string, it is converted to
 * an integer and applied as the ordinal value of a character.
 * </p>
 * @param bool $before_needle [optional] <p>
 * If true, strstr returns
 * the part of the haystack before the first
 * occurrence of the needle.
 * </p>
 * @return string the portion of string, or false if needle
 * is not found.
 * @since 4.0
 * @since 5.0
 */
function strstr ($haystack, $needle, $before_needle = null) {}

/**
 * Case-insensitive <function>strstr</function>
 * @link http://php.net/manual/en/function.stristr.php
 * @param string $haystack <p>
 * The string to search in
 * </p>
 * @param mixed $needle <p>
 * If needle is not a string, it is converted to
 * an integer and applied as the ordinal value of a character.
 * </p>
 * @param bool $before_needle [optional] <p>
 * If true, stristr
 * returns the part of the haystack before the
 * first occurrence of the needle.
 * </p>
 * @return string the matched substring. If needle is not
 * found, returns false.
 * @since 4.0
 * @since 5.0
 */
function stristr ($haystack, $needle, $before_needle = null) {}

/**
 * Find the last occurrence of a character in a string
 * @link http://php.net/manual/en/function.strrchr.php
 * @param string $haystack <p>
 * The string to search in
 * </p>
 * @param mixed $needle <p>
 * If <b>needle</b> contains more than one character,
 * only the first is used. This behavior is different from that of {@see strstr()}.
 * </p>
 * <p>
 * If <b>needle</b> is not a string, it is converted to
 * an integer and applied as the ordinal value of a character.
 * </p>
 * @return string <p>
 * This function returns the portion of string, or <b>FALSE</b> if
 * <b>needle</b> is not found.
 * </p>
 * @since 4.0
 * @since 5.0
 */
function strrchr ($haystack, $needle) {}

/**
 * Randomly shuffles a string
 * @link http://php.net/manual/en/function.str-shuffle.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @return string the shuffled string.
 * @since 4.3.0
 * @since 5.0
 */
function str_shuffle ($str) {}

/**
 * Return information about words used in a string
 * @link http://php.net/manual/en/function.str-word-count.php
 * @param string $string <p>
 * The string
 * </p>
 * @param int $format [optional] <p>
 * Specify the return value of this function. The current supported values
 * are:
 * 0 - returns the number of words found
 * @param string $charlist [optional] <p>
 * A list of additional characters which will be considered as 'word'
 * </p>
 * @return mixed an array or an integer, depending on the
 * format chosen.
 * @since 4.3.0
 * @since 5.0
 */
function str_word_count ($string, $format = null, $charlist = null) {}

/**
 * Convert a string to an array
 * @link http://php.net/manual/en/function.str-split.php
 * @param string $string <p>
 * The input string.
 * </p>
 * @param int $split_length [optional] <p>
 * Maximum length of the chunk.
 * </p>
 * @return array If the optional split_length parameter is
 * specified, the returned array will be broken down into chunks with each
 * being split_length in length, otherwise each chunk
 * will be one character in length.
 * </p>
 * <p>
 * false is returned if split_length is less than 1.
 * If the split_length length exceeds the length of
 * string, the entire string is returned as the first
 * (and only) array element.
 * @since 5.0
 */
function str_split ($string, $split_length = 1) {}

/**
 * Search a string for any of a set of characters
 * @link http://php.net/manual/en/function.strpbrk.php
 * @param string $haystack <p>
 * The string where char_list is looked for.
 * </p>
 * @param string $char_list <p>
 * This parameter is case sensitive.
 * </p>
 * @return string a string starting from the character found, or false if it is
 * not found.
 * @since 5.0
 */
function strpbrk ($haystack, $char_list) {}

/**
 * Binary safe comparison of 2 strings from an offset, up to length characters
 * @link http://php.net/manual/en/function.substr-compare.php
 * @param string $main_str <p>
 * The main string being compared.
 * </p>
 * @param string $str <p>
 * The secondary string being compared.
 * </p>
 * @param int $offset <p>
 * The start position for the comparison. If negative, it starts counting
 * from the end of the string.
 * </p>
 * @param int $length [optional] <p>
 * The length of the comparison.
 * </p>
 * @param bool $case_insensitivity [optional] <p>
 * If case_insensitivity is true, comparison is
 * case insensitive.
 * </p>
 * @return int &lt; 0 if main_str from position
 * offset is less than str, &gt;
 * 0 if it is greater than str, and 0 if they are equal.
 * If offset is equal to or greater than the length of
 * main_str or length is set and
 * is less than 1, substr_compare prints a warning and returns
 * false.
 * @since 5.0
 */
function substr_compare ($main_str, $str, $offset, $length = null, $case_insensitivity = null) {}

/**
 * Locale based string comparison
 * @link http://php.net/manual/en/function.strcoll.php
 * @param string $str1 <p>
 * The first string.
 * </p>
 * @param string $str2 <p>
 * The second string.
 * </p>
 * @return int &lt; 0 if str1 is less than
 * str2; &gt; 0 if
 * str1 is greater than
 * str2, and 0 if they are equal.
 * @since 4.0.5
 * @since 5.0
 */
function strcoll ($str1, $str2) {}

/**
 * Formats a number as a currency string
 * @link http://php.net/manual/en/function.money-format.php
 * @param string $format <p>
 * The format specification consists of the following sequence:
 * <p>a % character</p>
 * @param float $number <p>
 * The number to be formatted.
 * </p>
 * @return string the formatted string. Characters before and after the formatting
 * string will be returned unchanged.
 * Non-numeric number causes returning &null; and
 * emitting E_WARNING.
 * @since 4.3.0
 * @since 5.0
 */
function money_format ($format, $number) {}

/**
 * Return part of a string
 * @link http://php.net/manual/en/function.substr.php
 * @param string $string <p>
 * The input string.
 * </p>
 * @param int $start <p>
 * If start is non-negative, the returned string
 * will start at the start'th position in
 * string, counting from zero. For instance,
 * in the string 'abcdef', the character at
 * position 0 is 'a', the
 * character at position 2 is
 * 'c', and so forth.
 * </p>
 * <p>
 * If start is negative, the returned string
 * will start at the start'th character
 * from the end of string.
 * </p>
 * <p>
 * If string is less than or equal to
 * start characters long, false will be returned.
 * </p>
 * <p>
 * Using a negative start
 * ]]>
 * </p>
 * @param int $length [optional] <p>
 * If length is given and is positive, the string
 * returned will contain at most length characters
 * beginning from start (depending on the length of
 * string).
 * </p>
 * <p>
 * If length is given and is negative, then that many
 * characters will be omitted from the end of string
 * (after the start position has been calculated when a
 * start is negative). If
 * start denotes a position beyond this truncation,
 * an empty string will be returned.
 * </p>
 * <p>
 * If length is given and is 0,
 * false or &null; an empty string will be returned.
 * </p>
 * Using a negative length
 * ]]>
 * @return string the extracted part of string or false on failure.
 * @since 4.0
 * @since 5.0
 */
function substr ($string, $start, $length = null) {}

/**
 * Replace text within a portion of a string
 * @link http://php.net/manual/en/function.substr-replace.php
 * @param mixed $string <p>
 * The input string.
 * </p>
 * @param string $replacement <p>
 * The replacement string.
 * </p>
 * @param int $start <p>
 * If start is positive, the replacing will
 * begin at the start'th offset into
 * string.
 * </p>
 * <p>
 * If start is negative, the replacing will
 * begin at the start'th character from the
 * end of string.
 * </p>
 * @param int $length [optional] <p>
 * If given and is positive, it represents the length of the portion of
 * string which is to be replaced. If it is
 * negative, it represents the number of characters from the end of
 * string at which to stop replacing. If it
 * is not given, then it will default to strlen(
 * string ); i.e. end the replacing at the
 * end of string. Of course, if
 * length is zero then this function will have the
 * effect of inserting replacement into
 * string at the given
 * start offset.
 * </p>
 * @return mixed The result string is returned. If string is an
 * array then array is returned.
 * @since 4.0
 * @since 5.0
 */
function substr_replace ($string, $replacement, $start, $length = null) {}

/**
 * Quote meta characters
 * @link http://php.net/manual/en/function.quotemeta.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @return string the string with meta characters quoted.
 * @since 4.0
 * @since 5.0
 */
function quotemeta ($str) {}

/**
 * Make a string's first character uppercase
 * @link http://php.net/manual/en/function.ucfirst.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @return string the resulting string.
 * @since 4.0
 * @since 5.0
 */
function ucfirst ($str) {}

/**
 * Make a string's first character lowercase
 * @link http://php.net/manual/en/function.lcfirst.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @return string the resulting string.
 * @since 5.3.0
 */
function lcfirst ($str) {}

/**
 * Uppercase the first character of each word in a string
 * @link http://php.net/manual/en/function.ucwords.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @param string $delimiters [optional] <p>
 * @return string the modified string.
 * @since 4.0
 * @since 5.0
 */
function ucwords ($str, $delimiters = " \t\r\n\f\v") {}

/**
 * Translate certain characters
 * @link http://php.net/manual/en/function.strtr.php
 * @param string $str <p>
 * The string being translated.
 * </p>
 * @param string $from <p>
 * The string replacing from.
 * </p>
 * @param string $to <p>
 * The string being translated to to.
 * </p>
 * @return string This function returns a copy of str,
 * translating all occurrences of each character in
 * from to the corresponding character in
 * to.
 * @since 4.0
 * @since 5.0
 */
function strtr ($str, $from, $to) {}

/**
 * Quote string with slashes
 * @link http://php.net/manual/en/function.addslashes.php
 * @param string $str <p>
 * The string to be escaped.
 * </p>
 * @return string the escaped string.
 * @since 4.0
 * @since 5.0
 */
function addslashes ($str) {}

/**
 * Quote string with slashes in a C style
 * @link http://php.net/manual/en/function.addcslashes.php
 * @param string $str <p>
 * The string to be escaped.
 * </p>
 * @param string $charlist <p>
 * A list of characters to be escaped. If
 * charlist contains characters
 * \n, \r etc., they are
 * converted in C-like style, while other non-alphanumeric characters
 * with ASCII codes lower than 32 and higher than 126 converted to
 * octal representation.
 * </p>
 * <p>
 * When you define a sequence of characters in the charlist argument
 * make sure that you know what characters come between the
 * characters that you set as the start and end of the range.
 * ]]>
 * Also, if the first character in a range has a higher ASCII value
 * than the second character in the range, no range will be
 * constructed. Only the start, end and period characters will be
 * escaped. Use the ord function to find the
 * ASCII value for a character.
 * ]]>
 * </p>
 * <p>
 * Be careful if you choose to escape characters 0, a, b, f, n, r,
 * t and v. They will be converted to \0, \a, \b, \f, \n, \r, \t
 * and \v.
 * In PHP \0 (NULL), \r (carriage return), \n (newline), \f (form feed),
 * \v (vertical tab) and \t (tab) are predefined escape sequences, 
 * while in C all of these are predefined escape sequences.
 * </p>
 * @return string the escaped string.
 * @since 4.0
 * @since 5.0
 */
function addcslashes ($str, $charlist) {}

/**
 * Strip whitespace (or other characters) from the end of a string.
 * Without the second parameter, rtrim() will strip these characters:
 * <ul>
 * <li>" " (ASCII 32 (0x20)), an ordinary space.
 * <li>"\t" (ASCII 9 (0x09)), a tab.
 * <li>"\n" (ASCII 10 (0x0A)), a new line (line feed).
 * <li>"\r" (ASCII 13 (0x0D)), a carriage return.
 * <li>"\0" (ASCII 0 (0x00)), the NUL-byte.
 * <li>"\x0B" (ASCII 11 (0x0B)), a vertical tab.
 * </ul>
 * @link http://php.net/manual/en/function.rtrim.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @param string $charlist [optional] <p>
 * You can also specify the characters you want to strip, by means
 * of the charlist parameter.
 * Simply list all characters that you want to be stripped. With
 * .. you can specify a range of characters.
 * </p>
 * @return string the modified string.
 * @since 4.0
 * @since 5.0
 */
function rtrim ($str, $charlist = " \t\n\r\0\x0B") {}

/**
 * Replace all occurrences of the search string with the replacement string
 * @link http://php.net/manual/en/function.str-replace.php
 * @param mixed $search <p>
 * The value being searched for, otherwise known as the needle.
 * An array may be used to designate multiple needles.
 * </p>
 * @param mixed $replace <p>
 * The replacement value that replaces found search
 * values. An array may be used to designate multiple replacements.
 * </p>
 * @param mixed $subject <p>
 * The string or array being searched and replaced on,
 * otherwise known as the haystack.
 * </p>
 * <p>
 * If subject is an array, then the search and
 * replace is performed with every entry of
 * subject, and the return value is an array as
 * well.
 * </p>
 * @param int $count [optional] If passed, this will hold the number of matched and replaced needles.
 * @return mixed This function returns a string or an array with the replaced values.
 * @since 4.0
 * @since 5.0
 */
function str_replace ($search, $replace, $subject, &$count = null) {}

/**
 * Case-insensitive version of <function>str_replace</function>.
 * @link http://php.net/manual/en/function.str-ireplace.php
 * @param mixed $search <p>
 * Every replacement with search array is
 * performed on the result of previous replacement.
 * </p>
 * @param mixed $replace <p>
 * </p>
 * @param mixed $subject <p>
 * If subject is an array, then the search and
 * replace is performed with every entry of 
 * subject, and the return value is an array as
 * well.
 * </p>
 * @param int $count [optional] <p>
 * The number of matched and replaced needles will
 * be returned in count which is passed by
 * reference.
 * </p>
 * @return mixed a string or an array of replacements.
 * @since 5.0
 */
function str_ireplace ($search, $replace, $subject, &$count = null) {}

/**
 * Repeat a string
 * @link http://php.net/manual/en/function.str-repeat.php
 * @param string $input <p>
 * The string to be repeated.
 * </p>
 * @param int $multiplier <p>
 * Number of time the input string should be
 * repeated.
 * </p>
 * <p>
 * multiplier has to be greater than or equal to 0.
 * If the multiplier is set to 0, the function
 * will return an empty string.
 * </p>
 * @return string the repeated string.
 * @since 4.0
 * @since 5.0
 */
function str_repeat ($input, $multiplier) {}

/**
 * Return information about characters used in a string
 * @link http://php.net/manual/en/function.count-chars.php
 * @param string $string <p>
 * The examined string.
 * </p>
 * @param int $mode [optional] <p>
 * See return values.
 * </p>
 * @return mixed Depending on mode
 * count_chars returns one of the following:
 * 0 - an array with the byte-value as key and the frequency of
 * every byte as value.
 * 1 - same as 0 but only byte-values with a frequency greater
 * than zero are listed.
 * 2 - same as 0 but only byte-values with a frequency equal to
 * zero are listed.
 * 3 - a string containing all unique characters is returned.
 * 4 - a string containing all not used characters is returned.
 * @since 4.0
 * @since 5.0
 */
function count_chars ($string, $mode = null) {}

/**
 * Split a string into smaller chunks
 * @link http://php.net/manual/en/function.chunk-split.php
 * @param string $body <p>
 * The string to be chunked.
 * </p>
 * @param int $chunklen [optional] <p>
 * The chunk length.
 * </p>
 * @param string $end [optional] <p>
 * The line ending sequence.
 * </p>
 * @return string the chunked string.
 * @since 4.0
 * @since 5.0
 */
function chunk_split ($body, $chunklen = null, $end = null) {}

/**
 * Strip whitespace (or other characters) from the beginning and end of a string
 * @link http://php.net/manual/en/function.trim.php
 * @param string $str <p>
 * The string that will be trimmed.
 * </p>
 * @param string $charlist [optional] <p>
 * Optionally, the stripped characters can also be specified using
 * the charlist parameter.
 * Simply list all characters that you want to be stripped. With
 * .. you can specify a range of characters.
 * </p>
 * @return string The trimmed string.
 * @since 4.0
 * @since 5.0
 */
function trim ($str, $charlist = " \t\n\r\0\x0B") {}

/**
 * Strip whitespace (or other characters) from the beginning of a string
 * @link http://php.net/manual/en/function.ltrim.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @param string $charlist [optional] <p>
 * You can also specify the characters you want to strip, by means of the
 * charlist parameter.
 * Simply list all characters that you want to be stripped. With
 * .. you can specify a range of characters.
 * </p>
 * @return string This function returns a string with whitespace stripped from the
 * beginning of str.
 * Without the second parameter,
 * ltrim will strip these characters:
 * " " (ASCII 32
 * (0x20)), an ordinary space.
 * "\t" (ASCII 9
 * (0x09)), a tab.
 * "\n" (ASCII 10
 * (0x0A)), a new line (line feed).
 * "\r" (ASCII 13
 * (0x0D)), a carriage return.
 * "\0" (ASCII 0
 * (0x00)), the NUL-byte.
 * "\x0B" (ASCII 11
 * (0x0B)), a vertical tab.
 * @since 4.0
 * @since 5.0
 */
function ltrim ($str, $charlist = " \t\n\r\0\x0B") {}

/**
 * Strip HTML and PHP tags from a string
 * @link http://php.net/manual/en/function.strip-tags.php
 * @param string $str <p>
 * The input string.
 * </p>
 * @param string $allowable_tags [optional] <p>
 * You can use the optional second parameter to specify tags which should
 * not be stripped.
 * </p>
 * <p>
 * HTML comments and PHP tags are also stripped. This is hardcoded and
 * can not be changed with allowable_tags.
 * </p>
 * @return string the stripped string.
 * @since 4.0
 * @since 5.0
 */
function strip_tags ($str, $allowable_tags = null) {}

/**
 * Calculate the similarity between two strings
 * @link http://php.net/manual/en/function.similar-text.php
 * @param string $first <p>
 * The first string.
 * </p>
 * @param string $second <p>
 * The second string.
 * </p>
 * @param float $percent [optional] <p>
 * By passing a reference as third argument,
 * similar_text will calculate the similarity in
 * percent for you. 
 * </p>
 * @return int the number of matching chars in both strings.
 * @since 4.0
 * @since 5.0
 */
function similar_text ($first, $second, &$percent = null) {}

/**
 * Split a string by string
 * @link http://php.net/manual/en/function.explode.php
 * @param string $delimiter <p>
 * The boundary string.
 * </p>
 * @param string $string <p>
 * The input string.
 * </p>
 * @param int $limit [optional] <p>
 * If limit is set and positive, the returned array will contain
 * a maximum of limit elements with the last
 * element containing the rest of string.
 * </p>
 * <p>
 * If the limit parameter is negative, all components
 * except the last -limit are returned.
 * </p>
 * <p>
 * If the limit parameter is zero, then this is treated as 1.
 * </p>
 * @return array If delimiter is an empty string (""),
 * explode will return false.
 * If delimiter contains a value that is not
 * contained in string and a negative
 * limit is used, then an empty array will be
 * returned. For any other limit, an array containing
 * string will be returned.
 * @since 4.0
 * @since 5.0
 */
function explode ($delimiter, $string, $limit = null) {}

/**
 * Join array elements with a string
 * @link http://php.net/manual/en/function.implode.php
 * @param string $glue [optional]<p>
 * Defaults to an empty string. This is not the preferred usage of
 * implode as glue would be
 * the second parameter and thus, the bad prototype would be used.
 * </p>
 * @param array $pieces <p>
 * The array of strings to implode.
 * </p>
 * @return string a string containing a string representation of all the array
 * elements in the same order, with the glue string between each element.
 * @since 4.0
 * @since 5.0
 */
function implode ($glue, array $pieces) {}

/**
 * &Alias; <function>implode</function>
 * @link http://php.net/manual/en/function.join.php
 * @param string $glue <p>
 * Defaults to an empty string. This is not the preferred usage of
 * implode as glue would be
 * the second parameter and thus, the bad prototype would be used.
 * </p>
 * @param array $pieces <p>
 * The array of strings to implode.
 * </p>
 * @return string a string containing a string representation of all the array
 * elements in the same order, with the glue string between each element.
 * @since 4.0
 * @since 5.0
 */
function join ($glue, $pieces) {}

/**
 * Set locale information
 * @link http://php.net/manual/en/function.setlocale.php
 * @param int $category <p>
 * category is a named constant specifying the
 * category of the functions affected by the locale setting:
 * LC_ALL for all of the below
 * @param string $locale <p>
 * If locale is &null; or the empty string
 * "", the locale names will be set from the
 * values of environment variables with the same names as the above
 * categories, or from "LANG".
 * </p>
 * <p>
 * If locale is "0",
 * the locale setting is not affected, only the current setting is returned.
 * </p>
 * <p>
 * If locale is an array or followed by additional
 * parameters then each array element or parameter is tried to be set as
 * new locale until success. This is useful if a locale is known under
 * different names on different systems or for providing a fallback
 * for a possibly not available locale.
 * </p>
 * @param string $_ [optional] 
 * @return string the new current locale, or false if the locale functionality is
 * not implemented on your platform, the specified locale does not exist or
 * the category name is invalid.
 * </p>
 * <p>
 * An invalid category name also causes a warning message. Category/locale
 * names can be found in RFC 1766
 * and ISO 639.
 * Different systems have different naming schemes for locales.
 * </p>
 * <p>
 * The return value of setlocale depends
 * on the system that PHP is running. It returns exactly
 * what the system setlocale function returns.
 * @since 4.0
 * @since 5.0
 */
function setlocale ($category, $locale, $_ = null) {}

/**
 * Get numeric formatting information
 * @link http://php.net/manual/en/function.localeconv.php
 * @return array localeconv returns data based upon the current locale
 * as set by setlocale. The associative array that is
 * returned contains the following fields:
 * <tr valign="top">
 * <td>Array element</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>decimal_point</td>
 * <td>Decimal point character</td>
 * </tr>
 * <tr valign="top">
 * <td>thousands_sep</td>
 * <td>Thousands separator</td>
 * </tr>
 * <tr valign="top">
 * <td>grouping</td>
 * <td>Array containing numeric groupings</td>
 * </tr>
 * <tr valign="top">
 * <td>int_curr_symbol</td>
 * <td>International currency symbol (i.e. USD)</td>
 * </tr>
 * <tr valign="top">
 * <td>currency_symbol</td>
 * <td>Local currency symbol (i.e. $)</td>
 * </tr>
 * <tr valign="top">
 * <td>mon_decimal_point</td>
 * <td>Monetary decimal point character</td>
 * </tr>
 * <tr valign="top">
 * <td>mon_thousands_sep</td>
 * <td>Monetary thousands separator</td>
 * </tr>
 * <tr valign="top">
 * <td>mon_grouping</td>
 * <td>Array containing monetary groupings</td>
 * </tr>
 * <tr valign="top">
 * <td>positive_sign</td>
 * <td>Sign for positive values</td>
 * </tr>
 * <tr valign="top">
 * <td>negative_sign</td>
 * <td>Sign for negative values</td>
 * </tr>
 * <tr valign="top">
 * <td>int_frac_digits</td>
 * <td>International fractional digits</td>
 * </tr>
 * <tr valign="top">
 * <td>frac_digits</td>
 * <td>Local fractional digits</td>
 * </tr>
 * <tr valign="top">
 * <td>p_cs_precedes</td>
 * <td>
 * true if currency_symbol precedes a positive value, false
 * if it succeeds one
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>p_sep_by_space</td>
 * <td>
 * true if a space separates currency_symbol from a positive
 * value, false otherwise
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>n_cs_precedes</td>
 * <td>
 * true if currency_symbol precedes a negative value, false
 * if it succeeds one
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>n_sep_by_space</td>
 * <td>
 * true if a space separates currency_symbol from a negative
 * value, false otherwise
 * </td>
 * </tr>
 * <td>p_sign_posn</td>
 * <td>
 * 0 - Parentheses surround the quantity and currency_symbol
 * 1 - The sign string precedes the quantity and currency_symbol
 * 2 - The sign string succeeds the quantity and currency_symbol
 * 3 - The sign string immediately precedes the currency_symbol
 * 4 - The sign string immediately succeeds the currency_symbol
 * </td>
 * </tr>
 * <td>n_sign_posn</td>
 * <td>
 * 0 - Parentheses surround the quantity and currency_symbol
 * 1 - The sign string precedes the quantity and currency_symbol
 * 2 - The sign string succeeds the quantity and currency_symbol
 * 3 - The sign string immediately precedes the currency_symbol
 * 4 - The sign string immediately succeeds the currency_symbol
 * </td>
 * </tr>
 * </p>
 * <p>
 * The p_sign_posn, and n_sign_posn contain a string
 * of formatting options. Each number representing one of the above listed conditions.
 * </p>
 * <p>
 * The grouping fields contain arrays that define the way numbers should be
 * grouped. For example, the monetary grouping field for the nl_NL locale (in
 * UTF-8 mode with the euro sign), would contain a 2 item array with the
 * values 3 and 3. The higher the index in the array, the farther left the
 * grouping is. If an array element is equal to CHAR_MAX,
 * no further grouping is done. If an array element is equal to 0, the previous
 * element should be used.
 * @since 4.0.5
 * @since 5.0
 */
function localeconv () {}
