<?php
namespace Xin\Thrift\MonitorService;
/**
 * Autogenerated by Thrift Compiler (0.11.0)
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


class Github_release_args {
  static $isValidate = false;

  static $_TSPEC = array(
    1 => array(
      'var' => 'owner',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    2 => array(
      'var' => 'repo',
      'isRequired' => false,
      'type' => TType::STRING,
      ),
    );

  /**
   * @var string
   */
  public $owner = null;
  /**
   * @var string
   */
  public $repo = null;

  public function __construct($vals=null) {
    if (is_array($vals)) {
      if (isset($vals['owner'])) {
        $this->owner = $vals['owner'];
      }
      if (isset($vals['repo'])) {
        $this->repo = $vals['repo'];
      }
    }
  }

  public function getName() {
    return 'Github_release_args';
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
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->owner);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->repo);
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
    $xfer += $output->writeStructBegin('Github_release_args');
    if ($this->owner !== null) {
      $xfer += $output->writeFieldBegin('owner', TType::STRING, 1);
      $xfer += $output->writeString($this->owner);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->repo !== null) {
      $xfer += $output->writeFieldBegin('repo', TType::STRING, 2);
      $xfer += $output->writeString($this->repo);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

