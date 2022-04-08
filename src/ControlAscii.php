<?php
namespace Ascii;
/**
 * this file is part of ascii code: PHP 
 * This software is distributed under the terms of the MIT license. See LICENSE.md
 * for details.
 */
class ControlAscii
{
    /**
     * ASCII null control character
     */
    const NUL = "\x00";

    /**
     * ASCII start header control character
     */
    const SOH = "\x01";
    
    /**
     * ASCII start Text control character
     */
    const STX = "\x02";
    
    /**
     * ASCII end Text control character
     */
    const ETX = "\x03";
    
    /**
     * ASCII end transmission control character
     */
    const EOT = "\x04";
    
    /**
     * ASCII Enquiry control character
     */
    const ENQ = "\x05";
    
    /**
     * ASCII Acknowledgment control character
     */
    const ACK = "\x06";
    
    /**
     * ASCII Bell control character
     */
    const BEL = "\x07";
    
    /**
     * ASCII Backspace control character
     */
    const BS = "\x08";
   
    /**
     * ASCII Horizontal Tab control character
     */
    const HT = "\x09";
   
    /**
     * ASCII Line feed Tab control character
     */
    const LF = "\x0A";
   
    /**
     * ASCII Vertical Tab control character
     */
    const VT = "\x0B";
  
    /**
     * ASCII Form feed control character
     */
    const FF = "\x0C";
    
    /**
     * ASCII Carriage return control character
     */
    const CR = "\x0D";
    
    /**
     * ASCII Shift Out control character
     */
    const SO = "\x0E";
    
    /**
     * ASCII Shift In control character
     */
    const SI = "\x0F";
    
    /**
     * ASCII Data Link Escape control character
     */
    const DLE = "\x10";
    
    /**
     * ASCII Device Control 1 control character
     */
    const DC1 = "\x11";
    
    /**
     * ASCII DDevice Control 2 control character
     */
    const DC2 = "\x12";
    
    /**
     * ASCII DDevice Control 3 control character
     */
    const DC3 = "\x13";
    
    /**
     * ASCII DDevice Control 4 control character
     */
    const DC4 = "\x14";
    
    /**
     * ASCII Negative Acknowledgement control character
     */
    const NAK = "\x15";
    
    /**
     * ASCII Synchronous idle control character
     */
    const SYN = "\x16";
    
    /**
     * ASCII End of Transmission Block control character
     */
    const ETB = "\x17";

    /**
     * ASCII Cancel control character
     */
    const CAN = "\x18";
    
    /**
     * ASCII End of Medium control character
     */
    const EM = "\x19";
    
    /**
     * ASCII Substitute control character
     */
    const SUB = "\x1A";
    
    /**
     * ASCII Escape control character
     */
    const ESC = "\x1B";
    
    /**
     * ASCII File Separator control character
     */
    const FS = "\x1C";

    /**
     * ASCII Group Separator control character
     */
    const GS = "\x1D";

    /**
     * ASCII Record Separator control character
     */
    const RS = "\x1E";

    /**
     * ASCII Unit Separator control character
     */
    const US = "\x1F";
    
    /**
     * ASCII DEL control character
     */
    const DEL = "\x7F";
    
    public static function toAsciiCodeString($code): string{
        $coincidenceHexcode = "";
        if ($code == self::NUL || $code == 0){
            $coincidenceHexCode = "NUL";
        } else if ($code == self::SOH || $code== 1){
            $coincidenceHexCode = "SOH";
        } else if ($code == self::STX || $code == 2){
            $coincidenceHexCode = "STX";
        } else if ($code == self::ETX || $code == 3){
            $coincidenceHexCode = "ETX";
        } else if ($code == self::EOT || $code == 4){
            $coincidenceHexCode = "EOT";
        } else if ($code == self::ENQ || $code == 5){
            $coincidenceHexCode = "ENQ";
        } else if ($code == self::ACK || $code == 6){
            $coincidenceHexCode = "ACK";
        } else if ($code == self::BEL || $code == 7){
            $coincidenceHexCode = "BEL";
        } else if ($code == self::BS || $code == 8){
            $coincidenceHexCode = "BS";
        } else if ($code == self::HT || $code == 9){
            $coincidenceHexCode = "HT";
        } else if ($code == self::LF || $code == 10){
            $coincidenceHexCode = "LF";
        } else if ($code == self::VT || $code == 11){
            $coincidenceHexCode = "VT";
        } else if ($code == self::FF || $code == 12){
            $coincidenceHexCode = "FF";
        } else if ($code == self::CR || $code == 13){
            $coincidenceHexCode = "CR";
        } else if ($code == self::SO || $code == 14){
            $coincidenceHexCode = "SO";
        } else if ($code == self::SI || $code == 15){
            $coincidenceHexCode = "SI";
        } else if ($code == self::DLE || $code == 16){
            $coincidenceHexCode = "DLE";
        } else if ($code == self::DC1 || $code == 17){
            $coincidenceHexCode = "DC1";
        } else if ($code == self::DC2 || $code == 18){
            $coincidenceHexCode = "DC2";
        } else if ($code == self::DC3 || $code == 19){
            $coincidenceHexCode = "DC3";
        } else if ($code == self::DC4 || $code == 20){
            $coincidenceHexCode = "DC4";
        } else if ($code == self::NAK || $code == 21){ 
            $coincidenceHexCode = "NAK";
        } else if ($code == self::SYN || $code == 22){
            $coincidenceHexCode = "SYN";
        } else if ($code == self::ETB || $code == 23){
            $coincidenceHexCode = "ETB";
        } else if ($code == self::CAN || $code == 24){
            $coincidenceHexCode = "CAN";
        } else if ($code == self::EM || $code == 25){
            $coincidenceHexCode = "EM";
        } else if ($code == self::SUB || $code == 26){
            $coincidenceHexCode = "SUB";
        } else if ($code == self::ESC || $code == 27){
            $coincidenceHexCode = "ESC";
        } else if ($code == self::FS || $code == 28){
            $coincidenceHexCode = "FS";
        } else if ($code == self::GS || $code == 29){
            $coincidenceHexCode = "GS";
        } else if ($code == self::RS || $code == 30){
            $coincidenceHexCode = "RS";
        } else if ($code == self::US || $code == 31){
            $coincidenceHexCode = "US";
        } else if ($code == self::DEL || $code == 127){
            $coincidenceHexCode = "DEL";
        } 
        return $coincidenceHexCode;
    }
}



