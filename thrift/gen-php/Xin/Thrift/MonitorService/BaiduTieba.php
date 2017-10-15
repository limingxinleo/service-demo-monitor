<?php
namespace Xin\Thrift\MonitorService;

/**
 * Autogenerated by Thrift Compiler (0.10.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


class BaiduTieba {
  static $_TSPEC;

  /**
   * @var int
   */
  public $id = null;
  /**
   * @var int
   */
  public $fid = null;
  /**
   * @var string
   */
  public $nickname = null;
  /**
   * @var string
   */
  public $name = null;
  /**
   * @var string
   */
  public $avatar = null;
  /**
   * @var int
   */
  public $levelId = null;
  /**
   * @var string
   */
  public $levelName = null;
  /**
   * @var int
   */
  public $levelupScore = null;
  /**
   * @var string
   */
  public $slogan = null;
  /**
   * @var int
   */
  public $curScore = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'id',
          'type' => TType::I32,
          ),
        2 => array(
          'var' => 'fid',
          'type' => TType::I64,
          ),
        3 => array(
          'var' => 'nickname',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'name',
          'type' => TType::STRING,
          ),
        5 => array(
          'var' => 'avatar',
          'type' => TType::STRING,
          ),
        6 => array(
          'var' => 'levelId',
          'type' => TType::BYTE,
          ),
        7 => array(
          'var' => 'levelName',
          'type' => TType::STRING,
          ),
        8 => array(
          'var' => 'levelupScore',
          'type' => TType::I32,
          ),
        9 => array(
          'var' => 'slogan',
          'type' => TType::STRING,
          ),
        10 => array(
          'var' => 'curScore',
          'type' => TType::I32,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['id'])) {
        $this->id = $vals['id'];
      }
      if (isset($vals['fid'])) {
        $this->fid = $vals['fid'];
      }
      if (isset($vals['nickname'])) {
        $this->nickname = $vals['nickname'];
      }
      if (isset($vals['name'])) {
        $this->name = $vals['name'];
      }
      if (isset($vals['avatar'])) {
        $this->avatar = $vals['avatar'];
      }
      if (isset($vals['levelId'])) {
        $this->levelId = $vals['levelId'];
      }
      if (isset($vals['levelName'])) {
        $this->levelName = $vals['levelName'];
      }
      if (isset($vals['levelupScore'])) {
        $this->levelupScore = $vals['levelupScore'];
      }
      if (isset($vals['slogan'])) {
        $this->slogan = $vals['slogan'];
      }
      if (isset($vals['curScore'])) {
        $this->curScore = $vals['curScore'];
      }
    }
  }

  public function getName() {
    return 'BaiduTieba';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->fid);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->nickname);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->name);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->avatar);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::BYTE) {
            $xfer += $input->readByte($this->levelId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->levelName);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->levelupScore);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->slogan);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 10:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->curScore);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('BaiduTieba');
    if ($this->id !== null) {
      $xfer += $output->writeFieldBegin('id', TType::I32, 1);
      $xfer += $output->writeI32($this->id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->fid !== null) {
      $xfer += $output->writeFieldBegin('fid', TType::I64, 2);
      $xfer += $output->writeI64($this->fid);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->nickname !== null) {
      $xfer += $output->writeFieldBegin('nickname', TType::STRING, 3);
      $xfer += $output->writeString($this->nickname);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->name !== null) {
      $xfer += $output->writeFieldBegin('name', TType::STRING, 4);
      $xfer += $output->writeString($this->name);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->avatar !== null) {
      $xfer += $output->writeFieldBegin('avatar', TType::STRING, 5);
      $xfer += $output->writeString($this->avatar);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->levelId !== null) {
      $xfer += $output->writeFieldBegin('levelId', TType::BYTE, 6);
      $xfer += $output->writeByte($this->levelId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->levelName !== null) {
      $xfer += $output->writeFieldBegin('levelName', TType::STRING, 7);
      $xfer += $output->writeString($this->levelName);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->levelupScore !== null) {
      $xfer += $output->writeFieldBegin('levelupScore', TType::I32, 8);
      $xfer += $output->writeI32($this->levelupScore);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->slogan !== null) {
      $xfer += $output->writeFieldBegin('slogan', TType::STRING, 9);
      $xfer += $output->writeString($this->slogan);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->curScore !== null) {
      $xfer += $output->writeFieldBegin('curScore', TType::I32, 10);
      $xfer += $output->writeI32($this->curScore);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

